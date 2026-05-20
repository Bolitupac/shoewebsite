<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use Illuminate\Support\Facades\Http;

class MigrateImagesToSupabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'images:migrate-supabase';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Upload local product images to Supabase Storage and update database paths';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $url = config('services.supabase.url');
        $key = config('services.supabase.key');

        if (!$url || !$key) {
            $this->error('Supabase credentials not configured in config/services.php or .env');
            return 1;
        }

        $products = Product::all();
        $this->info("Found " . $products->count() . " products in total.");

        $migratedCount = 0;
        $skippedCount = 0;
        $failedCount = 0;

        foreach ($products as $product) {
            $imagePath = $product->image;

            if (empty($imagePath)) {
                $this->warn("Product ID '{$product->id}' has no image path. Skipped.");
                $skippedCount++;
                continue;
            }

            // If it starts with http, it is already on Supabase or external
            if (str_starts_with($imagePath, 'http://') || str_starts_with($imagePath, 'https://')) {
                $this->line("Product ID '{$product->id}' already has absolute URL: {$imagePath}. Skipped.");
                $skippedCount++;
                continue;
            }

            $localPath = public_path($imagePath);

            if (!file_exists($localPath)) {
                $this->error("Local file not found for Product ID '{$product->id}': {$localPath}");
                $failedCount++;
                continue;
            }

            $fileName = basename($imagePath);
            // Sanitize filename to ensure Supabase compatibility (no special characters like æ, å, etc.)
            $fileName = preg_replace('/[^a-zA-Z0-9._-]/', '', $fileName);
            $mimeType = mime_content_type($localPath) ?: 'image/png';

            $this->info("Uploading {$fileName} for Product ID '{$product->id}'...");

            try {
                $response = Http::timeout(20)
                    ->withToken($key)
                    ->withHeaders([
                        'apikey' => $key,
                        'Content-Type' => $mimeType,
                    ])
                    ->withBody(file_get_contents($localPath), $mimeType)
                    ->post("{$url}/storage/v1/object/products/{$fileName}");

                // Supabase returns 200/201 on success or 409 if file already exists
                if ($response->successful() || $response->status() === 409) {
                    $supabaseUrl = "{$url}/storage/v1/object/public/products/{$fileName}";
                    $product->image = $supabaseUrl;
                    $product->save();

                    if ($response->status() === 409) {
                        $this->info("File already exists on Supabase. Updated path in database to: {$supabaseUrl}");
                    } else {
                        $this->info("Successfully uploaded. Updated path in database to: {$supabaseUrl}");
                    }
                    $migratedCount++;
                } else {
                    $this->error("Upload failed for Product ID '{$product->id}'. Status: " . $response->status() . " Body: " . $response->body());
                    $failedCount++;
                }
            } catch (\Exception $e) {
                $this->error("Exception uploading Product ID '{$product->id}': " . $e->getMessage());
                $failedCount++;
            }
        }

        $this->info("Migration completed.");
        $this->info("Migrated: {$migratedCount} | Skipped: {$skippedCount} | Failed: {$failedCount}");
        return 0;
    }
}
