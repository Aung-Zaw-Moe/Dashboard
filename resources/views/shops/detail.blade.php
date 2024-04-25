@extends('layouts.bar')
@section('title', 'Shops');
@section('content')
    <div class="container mt-4">
        <div class="card mx-auto">
            <div class="card-header text-center font-weight-bold">
                Show Details
            </div>
            <div class="card-body">
                <div class="form-inline row">
                    <div class="col-md-2"></div>
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Photo :') }}</label>
                    <div class="col-md-3">
                        <img src="{{ asset('/images/' . $shop->image) }}">
                    </div>
                </div>

                <div class="form-inline row">
                    <div class="col-md-2"></div>
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Category Name :') }}</label>
                    <div class="col-md-3">
                        <span id="name">{{ $shop->category_id }}</span>
                    </div>
                </div>

                <div class="form-inline row">
                    <div class="col-md-2"></div>
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name :') }}</label>
                    <div class="col-md-3">
                        <span id="name">{{ $shop->name }}</span>
                    </div>
                </div>

                <div class="form-inline row">
                    <div class="col-md-2"></div>

                    <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone :') }}</label>

                    <div class="col-md-3">
                        <span id="phone">{{ $shop->phone }}</span>
                    </div>
                </div>

                <div class="form-inline row">
                    <div class="col-md-2"></div>

                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address :') }}</label>

                    <div class="col-md-3">
                        <span id="address">{{ $shop->address }}</span>
                    </div>
                </div>
                <div class="form-inline row">
                    <div class="col-md-2"></div>
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Description :') }}</label>
                    <div class="col-md-3">
                        <span id="name">{{ $shop->description }}</span>
                    </div>
                </div>

                <div class="form-inline row">
                    <div class="col-4"></div>
                    <a href="{{ route('shops.edit', $shop->id) }}"> <button type="button"
                            class="btn btn-primary pull-right m-3">
                            Edit</button></a>
                    <form action="{{ route('shops.destroy', $shop->id) }}" method="POST">
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
