@extends('layouts.bar')
@section('title', 'Types');
@section('content')
    <div class="container">
        <h1>Edit Type</h1>
        <form action="{{ route('types.update', $type->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-inline row mb-3">
                <div class="col-md-2">
                    <label for="name" class="form-label">{{ __('Type Name:') }}</label>
                </div>
                <div class="col-8">
                    <input type="text" id="name" name="name" class="form-control" size="85"
                        value="{{ $type->name }}">
                </div>
            </div>

            <div class="form-inline row mb-3">
                <div class="col-md-2"></div>
                <button type="submit" class="btn btn-primary">Update Admin</button>
            </div>
        </form>
    </div>
@endsection
