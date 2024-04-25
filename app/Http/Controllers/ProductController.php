<?php

namespace App\Http\Controllers;

use App\Product;
use App\Shop;
use App\Type;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $products)
    {
        $products = Product::latest()->paginate(5);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shops = Shop::all();
        $types = Type::all();
        return view('products.create', compact('shops', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'type_id' => 'required|numeric',
            'shop_id' => 'required|numeric',
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric|min:0',
            'quantity' => 'nullable|integer|min:0',
            'description' => 'required|string',
        ]);

        $product = new Product;
        $product->type_id = $data['type_id'];
        $product->shop_id = $data['shop_id'];
        $product->name = $data['name'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            // Move the uploaded image to the final destination
            $file->move(public_path('images'), $filename);

            // Load the image using Intervention Image
            $image = Image::make(public_path('images/' . $filename));

            // Resize, crop, and rotate the image
            $image->resize(120, 100);
            // Save the manipulated image overwriting the original one
            $image->save(public_path('images/' . $filename));

            // Update the image attribute of $shop
            $product->image = $filename;
        }

        $product->price = $data['price'];
        $product->quantity = $data['quantity'];
        $product->description = $data['description'];
        $product->save();


        return redirect()->route('products.index')->with('success', 'Shop created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $types = Type::all();
        $shops  = Shop::all();
        return view('products.edit', compact('product', 'types', 'shops'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'type_id' => 'required|numeric',
            'shop_id' => 'required|numeric',
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric|min:0',
            'quantity' => 'nullable|integer|min:0',
            'description' => 'required|string',
        ]);


        $product = new Product;
        $product->type_id = request()->type_id;
        $product->shop_id = request()->shop_id;
        $product->name = request()->name;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            // Move the uploaded image to the final destination
            $file->move(public_path('images'), $filename);

            // Load the image using Intervention Image
            $image = Image::make(public_path('images/' . $filename));

            // Resize, crop, and rotate the image
            $image->resize(120, 100);
            // Save the manipulated image overwriting the original one
            $image->save(public_path('images/' . $filename));

            // Update the image attribute of $shop
            $product->image = $filename;
        }

        $product->price = request()->price;
        $product->quantity = request()->quantity;
        $product->description = request()->description;
        $product->save();



        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('info', 'Shop deleted');
    }
}
