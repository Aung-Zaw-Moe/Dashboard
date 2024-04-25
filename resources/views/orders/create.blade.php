@extends('layouts.bar')
@section('title', 'Orders');
@section('content')
    <div class="container mt-4">
        <div class="card mx-auto">
            <div class="card-header text-center font-weight-bold">
                {{ __('Create Order') }}
            </div>
            <div class="card-body">
                <form action="{{ route('orders.store') }}" method="POST">
                    @csrf

                    <div class="form-inline row mb-3">
                        <div class="col-md-2">
                            <label for="shop_id">{{ __('Shop Name:') }} </label>
                        </div>
                        <div class="col-md-8">
                            <select id="shop_id" name="shop_id">
                                <option value="">Select Shops</option>
                                @foreach ($shops as $shop)
                                    <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-inline row mb-3">
                        <div class="col-md-2">
                            <label for="product_id">{{ __('Product Name:') }} </label>
                        </div>
                        <div class="col-md-8">
                            <select id="product_id" name="product_id">
                                <option value="">Select Products</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-inline row mb-3">
                        <div class="col-md-2">
                            <label for="customer_id">{{ __('Procduct Name:') }} </label>
                        </div>
                        <div class="col-md-8">
                            <select id="customer_id" name="customer_id">
                                <option value="">Select Products</option>
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
                                placeholder="Enter quantity" required="">

                            @error('quantity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-inline row mb-3">
                        <div class="col-md-2"></div>
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-secondary"
                                onclick="window.history.back();">Cancel</button>
                        </div>

                    </div>


                </form>
            </div>

        </div>
    </div>
@endsection
