@extends('layouts.bar')
@section('title', 'Orders');
@section('content')
    <div class="container">
        <h1>Edit Product</h1>
        <form action="{{ route('orders.update', $order->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="shop_id" class="form-label">{{ __('Shop Name:') }}</label>
                </div>
                <div class="col-8">
                    <select id="shop_id" name="shop_id">
                        <option value="{{ $order->shop->id }}">{{ $order->shop->name }}</option>
                        @foreach ($shops as $shop)
                            <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="product_id" class="form-label">{{ __('Product Name:') }}</label>
                </div>
                <div class="col-8">
                    <select id="product_id" name="product_id">
                        <option value="{{ $order->product->id }}">{{ $order->product->name }}</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="customer_id" class="form-label">{{ __('Customer Name:') }}</label>
                </div>
                <div class="col-8">
                    <select id="customer_id" name="customer_id">
                        <option value="{{ $order->customer->id }}">{{ $order->customer->name }}</option>
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="quantity" class="form-label">{{ __('QTY :') }}</label>
                </div>
                <div class="col-8">
                    <input type="number" id="quantity" name="quantity" class="form-control" size="85"
                        placeholder="Enter quantity" value="{{ $order->quantity }}">

                    @error('quantity')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-inline row mb-3">
                <div class="col-md-2"></div>
                <button type="submit" class="btn btn-primary">Update Admin</button>
            </div>
        </form>
    </div>
@endsection
