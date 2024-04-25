@extends('layouts.bar')
@section('title', 'Category');
@section('content')
    <div class="container">
        @if (session('info'))
            <div class="alert alert-info">
                {{ session('info') }}
            </div>
        @endif

        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">
                    <div class="form-inline row Justify-content-between ml-3">
                        Categories List
                        <a class="text-success" href="{{ route('categories.create') }}">
                            <button type="button" class="btn btn-primary"> <i class="metismenu-icon pe-7s-plus"></i>
                                Create New Shop</button></a>
                    </div>
                </h5>
                <table class="table table-striped table-bordered table-hover">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $key => $category)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button type="button" aria-haspopup="true" aria-expanded="false"
                                            data-toggle="dropdown"
                                            class="mb-2 mr-2 dropdown-toggle btn btn-outline-primary">Action</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                            <a href="{{ route('categories.show', $category->id) }}">
                                                <button type="button" tabindex="0" class="dropdown-item">View
                                                    Detail</button></a>

                                            <a href="{{ route('categories.edit', $category->id) }}">
                                                <button type="button" tabindex="0"
                                                    class="dropdown-item">Edit</button></a>
                                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" tabindex="0" class="dropdown-item">Delete</button>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $categories->links() }}

            </div>
        </div>
    </div>
@endsection
