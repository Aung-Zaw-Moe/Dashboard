@extends('layouts.bar')
@section('title', 'Categories');
@section('content')
    <div class="container mt-4">
        <div class="card mx-auto">
            <div class="card-header text-center font-weight-bold">
                Show Details
            </div>
            <div class="card-body">

                <div class="form-inline row">
                    <div class="col-md-2"></div>
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name :') }}</label>
                    <div class="col-md-3">
                        <span id="name">{{ $category->name }}</span>
                    </div>
                </div>

                <div class="form-inline row">
                    <div class="col-md-2"></div>
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Description :') }}</label>
                    <div class="col-md-3">
                        <span id="name">{{ $category->description }}</span>
                    </div>
                </div>

                <div class="form-inline row">
                    <div class="col-4"></div>
                    <a href="{{ route('categories.edit', $category->id) }}"> <button type="button"
                            class="btn btn-primary pull-right m-3">
                            Edit</button></a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST">

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
