@extends('layouts.bar')
@section('title', 'Categories');
@section('content')
    <div class="container mt-4">
        <div class="card mx-auto">
            <div class="card-header text-center font-weight-bold">
                {{ __('Create category') }}
            </div>
            <div class="card-body">
                <form action="{{ route('categories.store') }}" method="POST">
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
