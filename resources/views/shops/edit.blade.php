@extends('layouts.bar')
@section('title', 'Shops');
@section('content')
    <div class="container">
        <h1>Edit Shop</h1>
        <form action="{{ route('shops.update', $shop->id) }}" enctype="multipart/form-data" method="POST">

            @csrf
            @method('PUT')

            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="category_id" class="form-label">{{ __('Category Name:') }}</label>
                </div>
                <div class="col-8">
                    <input type="text" id="category_id" name="category_id" class="form-control" size="85"
                        value="{{ $shop->category_id }}">
                </div>
            </div>


            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="name" class="form-label">{{ __('Shop Name:') }}</label>
                </div>
                <div class="col-8">
                    <input type="text" id="name" name="name" class="form-control" size="85"
                        value="{{ $shop->name }}">
                </div>
            </div>

            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="image" class="form-label">{{ __('Current Photo:') }}</label>
                </div>
                <div class="col-8">

                    @if ($shop->image)
                        <img src="{{ asset('/images/' . $shop->image) }}" alt="Current Image">
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
                    <input type="file" id="image" name="image" class="form-control" vlaue="{{ $shop->image }}"
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
                    <label for="phone" class="form-label">{{ __('Phone :') }}</label>

                </div>
                <div class="col-8">
                    <input type="text" id="phone" name="phone" class="form-control" size="85"
                        value="{{ $shop->phone }}">
                </div>
            </div>

            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="address" class="form-label">{{ __('Address :') }}</label>
                </div>
                <div class="col-8">
                    <input type="text" id="address" name="address" class="form-control" size="85"
                        value="{{ $shop->address }}">
                    @if ($errors->has('address'))
                        <div class="text-danger ">{{ $errors->first('address') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="description" class="form-label">{{ __('Decription :') }}</label>
                </div>
                <div class="col-8">
                    <input type="text" id="description" name="description" class="form-control" size="85"
                        value="{{ $shop->description }}">
                </div>
            </div>

            <div class="form-inline row mb-3">
                <div class="col-md-2"></div>
                <button type="submit" class="btn btn-primary">Update Admin</button>
            </div>
        </form>
    </div>
@endsection
