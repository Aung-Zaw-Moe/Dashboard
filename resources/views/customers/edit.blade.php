@extends('layouts.bar')
@section('title', 'Customers');
@section('content')
    <div class="container">
        <h1>Edit Admin</h1>
        <form action="{{ route('customers.update', $customer->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="name" class="form-label">{{ __('Customer Name:') }}</label>
                </div>
                <div class="col-8">
                    <input type="text" id="name" name="name" class="form-control" size="85"
                        value="{{ $customer->name }}">
                </div>
            </div>

            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="phone" class="form-label">{{ __('Customer Phone:') }}</label>
                </div>
                <div class="col-8">
                    <input type="text" id="phone" name="phone" class="form-control" size="85"
                        value="{{ $customer->phone }}">
                </div>
            </div>
            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="email" class="form-label">{{ __('Customer Email:') }}</label>
                </div>
                <div class="col-8">
                    <input type="text" id="email" name="email" class="form-control" size="85"
                        value="{{ $customer->email }}">
                </div>
            </div>
            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="address" class="form-label">{{ __('Customer Address:') }}</label>
                </div>
                <div class="col-8">
                    <input type="text" id="address" name="address" class="form-control" size="85"
                        value="{{ $customer->address }}">
                </div>
            </div>
            <div class="form-inline row mb-3">
                <div class="col-md-2"></div>
                <button type="submit" class="btn btn-primary">Update Admin</button>
            </div>
        </form>
    </div>
@endsection
