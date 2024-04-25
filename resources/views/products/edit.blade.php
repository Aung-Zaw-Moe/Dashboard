@extends('layouts.bar')
@section('title', 'Products');
@section('content')
    <div class="container">
        <h1>Edit Product</h1>
        <form action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data" method="POST">

            @csrf
            @method('PUT')

            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="type_id" class="form-label">{{ __('Type Name:') }}</label>
                </div>
                <div class="col-8">
                    <select id="type_id" name="type_id">
                        <option value="{{ $product->type->id }}">{{ $product->type->name }}</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="shop_id" class="form-label">{{ __('Shop Name:') }}</label>
                </div>
                <div class="col-8">
                    <select id="shop_id" name="shop_id">
                        <option value="{{ $product->shop->id }}">{{ $product->shop->name }}</option>
                        @foreach ($shops as $shop)
                            <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="name" class="form-label">{{ __('Product Name:') }}</label>
                </div>
                <div class="col-8">
                    <input type="text" id="name" name="name" class="form-control" size="85"
                        value="{{ $product->name }}">
                </div>
            </div>

            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="image" class="form-label">{{ __('Current Photo:') }}</label>
                </div>
                <div class="col-8">

                    @if ($product->image)
                        <img src="{{ asset('/images/' . $product->image) }}" alt="Current Image">
                    @else
                        <p>No image available</p>
                    @endif
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="image" class="form-label">{{ __('New Image:') }}</label>

                </div>
                <div class="col-8">
                    <input type="file" id="image" name="image" class="form-control" vlaue="{{ $product->image }}"
                        style="width:113%">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="description" class="form-label">{{ __('Decription :') }}</label>
                </div>
                <div class="col-8">
                    <input type="text" id="description" name="description" class="form-control" size="85"
                        value="{{ $product->description }}">
                </div>
            </div>

            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="price" class="form-label">{{ __('Price:') }}</label>
                </div>
                <div class="col-8">
                    <input type="number" id="price" name="price" class="form-control" size="85"
                        value="{{ $product->price }}">

                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="quantity" class="form-label">{{ __('QTY :') }}</label>
                </div>
                <div class="col-8">
                    <input type="number" id="quantity" name="quantity" class="form-control" size="85"
                        placeholder="Enter quantity" value="{{ $product->quantity }}">

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
