@extends('layouts.bar')
@section('title', 'Products');
@section('content')
    <div class="container mt-4">
        <div class="card mx-auto">
            <div class="card-header text-center font-weight-bold">
                Show Details
            </div>
            <div class="card-body">
                <div class="form-inline row">
                    <div class="col-md-2"></div>
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Product Photo :') }}</label>
                    <div class="col-md-3">
                        <img src="{{ asset('/images/' . $product->image) }}">
                    </div>
                </div>

                <div class="form-inline row">
                    <div class="col-md-2"></div>
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Type Name :') }}</label>
                    <div class="col-md-3">
                        <span id="type_id">{{ $product->type->name }}</span>
                    </div>
                </div>

                <div class="form-inline row">
                    <div class="col-md-2"></div>
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Shop Name :') }}</label>
                    <div class="col-md-3">
                        <span id="name">{{ $product->shop->name }}</span>
                    </div>
                </div>

                <div class="form-inline row">
                    <div class="col-md-2"></div>

                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Product Name :') }}</label>

                    <div class="col-md-3">
                        <span id="name">{{ $product->name }}</span>
                    </div>
                </div>

                <div class="form-inline row">
                    <div class="col-md-2"></div>

                    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price :') }}</label>

                    <div class="col-md-3">
                        <span id="price">{{ $product->price }}</span>
                    </div>
                </div>

                <div class="form-inline row">
                    <div class="col-md-2"></div>

                    <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('quantity :') }}</label>

                    <div class="col-md-3">
                        <span id="quantity">{{ $product->quantity }}</span>
                    </div>
                </div>

                <div class="form-inline row">
                    <div class="col-md-2"></div>

                    <label for="description"
                        class="col-md-4 col-form-label text-md-right">{{ __('description :') }}</label>

                    <div class="col-md-3">
                        <span id="description">{{ $product->description }}</span>
                    </div>
                </div>



                <div class="form-inline row">
                    <div class="col-4"></div>
                    <a href="{{ route('products.edit', $product->id) }}"> <button type="button"
                            class="btn btn-primary pull-right m-3">
                            Edit</button></a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
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
