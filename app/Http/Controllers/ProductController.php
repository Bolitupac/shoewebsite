<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('section')->orderBy('name')->get();
        $totalProducts = $products->count();
        $sections = $products->groupBy('section')->map->count();
        return view('admin.products', compact('products', 'totalProducts', 'sections'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|string|max:255',
            'category_target' => 'required|string|max:255',
            'category_item'   => 'required|string|max:255',
            'category_shoe_type' => 'nullable|string|max:255',
            'image'       => 'required|image|max:5120',
            'description' => 'required|string',
            'colour'      => 'required|string|max:255',
            'hidden'      => 'nullable|boolean',
            'limited_edition_count' => 'nullable|numeric|min:1',
            'sold_out'    => 'nullable|boolean',
            'construction_type' => 'nullable|string|max:255',
            'fitting_type' => 'nullable|string|max:255',
            'sole_type' => 'nullable|string|max:255',
        ]);

        try {
            $validated['category'] = [$validated['category_target'], $validated['category_item']];
            if (!empty($validated['category_shoe_type'])) {
                $validated['category'][] = $validated['category_shoe_type'];
            }
            unset($validated['category_target'], $validated['category_item'], $validated['category_shoe_type']);

            $validated['section'] = 'general';

            $validated['price'] = preg_replace('/[^0-9.]/', '', $validated['price']);

            $validated['id'] = Str::slug($validated['name']);
            $validated['hidden'] = $request->boolean('hidden');
            $validated['limited_edition'] = !empty($validated['limited_edition_count']);
            $validated['sold_out'] = $request->boolean('sold_out');

            // Ensure unique ID
            $base = $validated['id'];
            $count = 1;
            while (Product::where('id', $validated['id'])->exists()) {
                $validated['id'] = $base . '-' . $count++;
            }

            if ($request->hasFile('image')) {
                $validated['image'] = $this->uploadToSupabase($request->file('image'));
            }

            $product = Product::create($validated);

            if ($request->expectsJson()) {
                return response()->json(['success' => true, 'message' => 'Product added.', 'product' => $product], 200);
            }

            return redirect()->route('admin.products')->with('success', 'Product added.');
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Product store failed: ' . $e->getMessage());
            if ($request->expectsJson()) {
                return response()->json(['success' => false, 'message' => 'Item failed to upload.'], 500);
            }
            return back()->withErrors(['error' => 'Item failed to upload.'])->withInput();
        }
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|string|max:255',
            'category_target' => 'required|string|max:255',
            'category_item'   => 'required|string|max:255',
            'category_shoe_type' => 'nullable|string|max:255',
            'image'       => 'nullable|image|max:5120',
            'description' => 'required|string',
            'colour'      => 'required|string|max:255',
            'hidden'      => 'nullable|boolean',
            'limited_edition_count' => 'nullable|numeric|min:1',
            'sold_out'    => 'nullable|boolean',
            'construction_type' => 'nullable|string|max:255',
            'fitting_type' => 'nullable|string|max:255',
            'sole_type' => 'nullable|string|max:255',
        ]);

        try {
            $validated['category'] = [$validated['category_target'], $validated['category_item']];
            if (!empty($validated['category_shoe_type'])) {
                $validated['category'][] = $validated['category_shoe_type'];
            }
            unset($validated['category_target'], $validated['category_item'], $validated['category_shoe_type']);

            $validated['section'] = 'general';

            $validated['price'] = preg_replace('/[^0-9.]/', '', $validated['price']);

            $validated['hidden'] = $request->boolean('hidden');
            $validated['limited_edition'] = !empty($validated['limited_edition_count']);
            $validated['sold_out'] = $request->boolean('sold_out');

            if ($request->hasFile('image')) {
                $validated['image'] = $this->uploadToSupabase($request->file('image'));
            } else {
                unset($validated['image']);
            }

            $product->update($validated);

            if ($request->expectsJson()) {
                return response()->json(['success' => true, 'message' => 'Product updated.', 'product' => $product], 200);
            }

            return redirect()->route('admin.products')->with('success', 'Product updated.');
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Product update failed: ' . $e->getMessage());
            if ($request->expectsJson()) {
                return response()->json(['success' => false, 'message' => 'Item failed to upload.'], 500);
            }
            return back()->withErrors(['error' => 'Item failed to upload.'])->withInput();
        }
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products')->with('success', 'Product deleted.');
    }

    private function uploadToSupabase($file)
    {
        $url = config('services.supabase.url');
        $key = config('services.supabase.key');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->getPathname();
        
        if ($url && $key) {
            try {
                $response = \Illuminate\Support\Facades\Http::timeout(3)
                    ->withToken($key)
                    ->withHeaders([
                        'apikey' => $key,
                        'Content-Type' => $file->getMimeType(),
                    ])
                    ->withBody(file_get_contents($filePath), $file->getMimeType())
                    ->post("{$url}/storage/v1/object/products/{$fileName}");
                    
                if ($response->successful()) {
                    return "{$url}/storage/v1/object/public/products/{$fileName}";
                }
                
                \Illuminate\Support\Facades\Log::warning('Supabase upload unsuccessful, falling back to local: ' . $response->body());
            } catch (\Exception $e) {
                \Illuminate\Support\Facades\Log::warning('Supabase upload failed, falling back to local: ' . $e->getMessage());
            }
        }
        
        // Local upload fallback
        $destinationPath = public_path('uploads/products');
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }
        $file->move($destinationPath, $fileName);
        return 'uploads/products/' . $fileName;
    }
}
