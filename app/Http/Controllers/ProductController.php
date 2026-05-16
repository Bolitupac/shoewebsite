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
            'section'     => 'required|string|max:255',
            'image'       => 'required|image|max:5120',
            'description' => 'required|string',
            'colour'      => 'required|string|max:255',
            'badge'       => 'nullable|string|max:255',
            'hidden'      => 'nullable|boolean',
            'limited_edition' => 'nullable|boolean',
            'limited_edition_count' => 'nullable|string|max:255',
            'sold_out'    => 'nullable|boolean',
        ]);

        $validated['category'] = [$validated['category_target'], $validated['category_item']];
        unset($validated['category_target'], $validated['category_item']);

        $validated['price'] = preg_replace('/[^0-9.]/', '', $validated['price']);

        $validated['id'] = Str::slug($validated['name']);
        $validated['hidden'] = $request->boolean('hidden');
        $validated['limited_edition'] = $request->boolean('limited_edition');
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

        Product::create($validated);

        return redirect()->route('admin.products')->with('success', 'Product added.');
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|string|max:255',
            'category_target' => 'required|string|max:255',
            'category_item'   => 'required|string|max:255',
            'section'     => 'required|string|max:255',
            'image'       => 'nullable|image|max:5120',
            'description' => 'required|string',
            'colour'      => 'required|string|max:255',
            'badge'       => 'nullable|string|max:255',
            'hidden'      => 'nullable|boolean',
            'limited_edition' => 'nullable|boolean',
            'limited_edition_count' => 'nullable|string|max:255',
            'sold_out'    => 'nullable|boolean',
        ]);

        $validated['category'] = [$validated['category_target'], $validated['category_item']];
        unset($validated['category_target'], $validated['category_item']);

        $validated['price'] = preg_replace('/[^0-9.]/', '', $validated['price']);

        $validated['hidden'] = $request->boolean('hidden');
        $validated['limited_edition'] = $request->boolean('limited_edition');
        $validated['sold_out'] = $request->boolean('sold_out');

        if ($request->hasFile('image')) {
            $validated['image'] = $this->uploadToSupabase($request->file('image'));
        } else {
            unset($validated['image']);
        }

        $product->update($validated);

        return redirect()->route('admin.products')->with('success', 'Product updated.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products')->with('success', 'Product deleted.');
    }

    private function uploadToSupabase($file)
    {
        $url = env('NEXT_PUBLIC_SUPABASE_URL');
        $key = env('NEXT_PUBLIC_SUPABASE_KEY');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->getPathname();
        
        $response = \Illuminate\Support\Facades\Http::withToken($key)
            ->withHeaders([
                'apikey' => $key,
                'Content-Type' => $file->getMimeType(),
            ])
            ->withBody(file_get_contents($filePath), $file->getMimeType())
            ->post("{$url}/storage/v1/object/products/{$fileName}");
            
        if ($response->successful()) {
            return "{$url}/storage/v1/object/public/products/{$fileName}";
        }
        
        throw new \Exception('Failed to upload image: ' . $response->body());
    }
}
