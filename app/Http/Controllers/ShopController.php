<?php

namespace App\Http\Controllers;


use App\Category;
use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Shop $shops)
    {
        $shops = Shop::latest()->paginate(5);
        return view('shops.index', ['shops' => $shops]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('shops.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = validator(request()->all(), [
            'category_id' => 'required',
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone' => 'required|min:8|max:11',
            'address' => 'nullable|string',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $shop = new Shop;
        $shop->category_id = request()->category_id;
        $shop->name = request()->name;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('images'), $filename);
            $image = Image::make(public_path('images/' . $filename));
            $image->resize(120, 100);
            $image->save(public_path('images/' . $filename));
            $shop->image = $filename;
        }

        $shop->phone = request()->phone;
        $shop->address = request()->address;
        $shop->description = request()->description;
        $shop->save();


        return redirect()->route('shops.index')->with('success', 'Shop created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        return view('shops.detail', compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        return view('shops.edit', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        $validator = validator(request()->all(), [
            'category_id' => 'required',
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone' => 'required|min:8|max:11',
            'address' => 'nullable|string',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        $shop = new Shop;
        $shop->category_id = request()->category_id;
        $shop->name = request()->name;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('images'), $filename);
            $image = Image::make(public_path('images/' . $filename));
            $image->resize(120, 100);
            $image->save(public_path('images/' . $filename));
            $shop->image = $filename;
        }
        $shop->phone = request()->phone;
        $shop->address = request()->address;
        $shop->description = request()->description;
        $shop->save();

        return redirect()->route('shops.index')->with('success', 'Shop updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        $shop->delete();
        return redirect()->route('shops.index')->with('info', 'Shop deleted');
    }
}
