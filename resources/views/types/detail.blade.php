@extends('layouts.bar')
@section('title', 'Types');
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
                        <span id="name">{{ $type->name }}</span>
                    </div>
                </div>

                <div class="form-inline row">
                    <div class="col-4"></div>
                    <a href="{{ route('types.edit', $type->id) }}"> <button type="button"
                            class="btn btn-primary pull-right m-3">
                            Edit</button></a>
                    <form action="{{ route('types.destroy', $type->id) }}" method="POST">
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
