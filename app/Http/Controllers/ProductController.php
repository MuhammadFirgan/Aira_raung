<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('dashboard.section.product_list.index', [
            'products' => $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.section.product_list.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $rules = [
            'image' => 'required|image|mimes:jpg,png,jpeg',
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'detail_product' => 'required|string|max:255',
        ];

        $validatedData = $request->validate($rules);

        

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
            $validatedData['image'] = $imagePath;
        }

        Product::create($validatedData);

        return redirect('/dashboard/pages/product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'image' => 'required|image|mimes:jpg,png,jpeg',
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'detail_product' => 'required|string|max:255',
        ];

        $validatedData = $request->validate($rules);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }

            $imagePath = $request->file('image')->store('image', 'public');
            $validatedData['image'] = $imagePath;
        } else {
           
            unset($validatedData['image']);
        }

        $product->update($validatedData);

        return redirect('/dashboard/pages/product');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);

        return redirect('/dashboard/pages/product');
    }
}
