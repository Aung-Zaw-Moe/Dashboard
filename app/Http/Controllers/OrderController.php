<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\Product;
use App\Shop;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Order $orders)
    {
        $orders = Order::latest()->paginate(5);
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shops = Shop::all();
        $products = Product::all();
        $customers = Customer::all();
        return view('orders.create', compact('shops', 'products', 'customers'));
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
            'shop_id' => 'required|integer',
            'product_id' => 'required|integer',
            'customer_id' => 'required|integer',
            'quantity' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $order = new Order;
        $order->shop_id = request()->shop_id;
        $order->product_id = request()->product_id;
        $order->customer_id = request()->customer_id;
        $order->quantity = request()->quantity;
        $order->save();

        return redirect()->route('orders.index')->with('success', 'Order created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('orders.detail', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $products = Product::all();
        $shops  = Shop::all();
        $customers = Customer::all();
        return view('orders.edit', compact('order', 'products', 'shops', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $validator = validator(request()->all(), [
            'product_id' => 'required|numeric',
            'shop_id' => 'required|numeric',
            'customer_id' => 'required|numeric',
            'quantity' => 'nullable|integer|min:0',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $order->product_id = request()->product_id;
        $order->shop_id = request()->shop_id;
        $order->customer_id = request()->customer_id;
        $order->quantity = request()->quantity;
        $order->save();

        return redirect()->route('orders.index')->with('success', 'Order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('info', 'Order deleted');
    }
}
