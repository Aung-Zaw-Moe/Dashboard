@extends('layouts.bar')
@section('title', 'Orders');
@section('content')
    <div class="container mt-4">
        <div class="card mx-auto">
            <div class="card-header text-center font-weight-bold">
                Show Details
            </div>
            <div class="card-body">
                <div class="form-inline row">
                    <div class="col-md-2"></div>
                    <label for="shop_id" class="col-md-4 col-form-label text-md-right">{{ __('Shop Name :') }}</label>
                    <div class="col-md-3">
                        <span id="shop_id">{{ $order->shop->name }}</span>
                    </div>
                </div>

                <div class="form-inline row">
                    <div class="col-md-2"></div>
                    <label for="product_id" class="col-md-4 col-form-label text-md-right">{{ __('Product Name :') }}</label>
                    <div class="col-md-3">
                        <span id="product_id">{{ $order->product->name }}</span>
                    </div>
                </div>

                <div class="form-inline row">
                    <div class="col-md-2"></div>

                    <label for="customer_id"
                        class="col-md-4 col-form-label text-md-right">{{ __('Customer Name :') }}</label>

                    <div class="col-md-3">
                        <span id="name">{{ $order->customer->name }}</span>
                    </div>
                </div>

                <div class="form-inline row">
                    <div class="col-md-2"></div>

                    <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('quantity :') }}</label>

                    <div class="col-md-3">
                        <span id="quantity">{{ $order->quantity }}</span>
                    </div>
                </div>
                <div class="form-inline row">
                    <div class="col-4"></div>
                    <a href="{{ route('orders.edit', $order->id) }}"> <button type="button"
                            class="btn btn-primary pull-right m-3">
                            Edit</button></a>
                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger pull-right mt-3">Delete</button>
                    </form>

                    <button type="button" class="btn btn-secondary pull-right m-3"
                        onclick=" window.history.back();">Cancel</button>


                </div>
            </div>
        </div>
    </div>
@endsection
