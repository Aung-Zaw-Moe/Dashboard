@extends('layouts.bar')
@section('title', 'categories');
@section('content')
    <div class="container">
        <h1>Edit Admin</h1>
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="name" class="form-label">{{ __('Category Name:') }}</label>
                </div>
                <div class="col-8">
                    <input type="text" id="name" name="name" class="form-control" size="85"
                        value="{{ $category->name }}">
                </div>
            </div>

            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="description" class="form-label">{{ __('Decription :') }}</label>
                </div>
                <div class="col-8">
                    <input type="text" id="description" name="description" class="form-control" size="85"
                        value="{{ $category->description }}">
                </div>
            </div>

            <div class="form-inline row mb-3">
                <div class="col-md-2"></div>
                <button type="submit" class="btn btn-primary">Update Admin</button>
            </div>
        </form>
    </div>
@endsection
