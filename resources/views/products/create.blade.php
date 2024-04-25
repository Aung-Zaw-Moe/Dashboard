@extends('layouts.bar')
@section('title', 'Product');
@section('content')
    <div class="container mt-4">
        <div class="card mx-auto">
            <div class="card-header text-center font-weight-bold">
                {{ __('Create Product') }}
            </div>
            <div class="card-body">
                <form action="{{ route('products.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-inline row mb-3">
                        <div class="col-md-2">
                            <label for="type_id">{{ __('Type Name:') }} </label>
                        </div>
                        <div class="col-md-8">
                            <select id="type_id" name="type_id">
                                <option value="">Select Products</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

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
                            <label for="name" class="form-label">{{ __('Name:') }}</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="name" name="name" class="form-control" size="85"
                                required="">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-inline row mb-3">
                        <div class="col-md-2">
                            <label for="image" class="form-label">{{ __('Photo:') }}</label>
                        </div>
                        <div class="col-8">
                            <input type="file" id="image" name="image" class="form-control" style="width:118%"
                                required="">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-inline row mb-3">
                        <div class="col-md-2">
                            <label for="description" class="form-label">{{ __('Description:') }}</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="text" name="description" class="form-control" size="85"
                                required="">
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-inline row mb-3">
                        <div class="col-md-2">
                            <label for="price" class="form-label">{{ __('Price:') }}</label>
                        </div>
                        <div class="col-8">
                            <input type="number" id="price" name="price" class="form-control" size="85"
                                required="">

                            @error('name')
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
