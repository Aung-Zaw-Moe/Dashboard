@extends('layouts.bar')
@section('title', 'Course');
@section('content')
    <div class="container mt-4">
        <div class="card mx-auto">
            <div class="card-header text-center font-weight-bold">
                {{ __('Create Shop') }}
            </div>
            <div class="card-body">
                <form action="{{ route('shops.store') }}" enctype="multipart/form-data" method="POST">

                    @csrf
                    <div class="form-inline row mb-3">
                        <div class="col-md-2">
                            <label for="category_id">{{ __('Category Name:') }} </label>
                        </div>
                        <div class="col-md-8">
                            <select id="category_id" name="category_id">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                            <label for="phone" class="form-label">{{ __('Phone:') }}</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="phone" name="phone" class="form-control" size="85"
                                required="">

                            @if ($errors->has('phone'))
                                <div class="text-danger ">{{ $errors->first('phone') }}
                                </div>
                            @endif

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
                        <div class="col-md-2">
                            <label for="description" class="form-label">{{ __('Description:') }}</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="text" name="description" class="form-control" size="85"
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
