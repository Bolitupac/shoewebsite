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
            'category'    => 'required|string|max:255',
            'section'     => 'required|string|max:255',
            'image'       => 'required|string|max:255',
            'description' => 'required|string',
            'colour'      => 'required|string|max:255',
            'badge'       => 'nullable|string|max:255',
            'hidden'      => 'nullable|boolean',
        ]);

        $validated['id'] = Str::slug($validated['name']);
        $validated['hidden'] = $request->boolean('hidden');

        // Ensure unique ID
        $base = $validated['id'];
        $count = 1;
        while (Product::where('id', $validated['id'])->exists()) {
            $validated['id'] = $base . '-' . $count++;
        }

        Product::create($validated);

        return redirect()->route('admin.products')->with('success', 'Product added.');
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|string|max:255',
            'category'    => 'required|string|max:255',
            'section'     => 'required|string|max:255',
            'image'       => 'required|string|max:255',
            'description' => 'required|string',
            'colour'      => 'required|string|max:255',
            'badge'       => 'nullable|string|max:255',
            'hidden'      => 'nullable|boolean',
        ]);

        $validated['hidden'] = $request->boolean('hidden');

        $product->update($validated);

        return redirect()->route('admin.products')->with('success', 'Product updated.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products')->with('success', 'Product deleted.');
    }
}
