@extends('layouts.bar')
@section('title', 'Customer');
@section('content')
    <div class="container mt-4">
        <div class="card mx-auto">
            <div class="card-header text-center font-weight-bold">
                {{ __('Create Customer') }}
            </div>
            <div class="card-body">
                <form action="{{ route('customers.store') }}" method="POST">
                    @csrf
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
                            <label for="phone" class="form-label">{{ __('Phone:') }}</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="phone" name="phone" class="form-control" size="85"
                                required="">

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-inline row mb-3">
                        <div class="col-md-2">
                            <label for="email" class="form-label">{{ __('Email:') }}</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="email" name="email" class="form-control" size="85"
                                required="">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-inline row mb-3">
                        <div class="col-md-2">
                            <label for="address" class="form-label">{{ __('Address:') }}</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="address" name="address" class="form-control" size="85"
                                required="">


                            @error('address')
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
