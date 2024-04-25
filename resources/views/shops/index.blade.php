@extends('layouts.bar')
@section('title', 'Shops');
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
                        Shop List
                        <a class="text-success" href="{{ route('shops.create') }}">
                            <button type="button" class="btn btn-primary"> <i class="metismenu-icon pe-7s-plus"></i>
                                Create New Shop</button></a>
                    </div>
                </h5>
                <table class="table table-striped table-bordered table-hover">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Name</th>
                            <th>Photo</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($shops as $key => $shop)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $shop->category->name ?? 'N/A' }}</td>

                                <td>{{ $shop->name }}</td>
                                <td>{{ $shop->image }}</td>
                                <td>{{ $shop->phone }}</td>
                                <td>{{ $shop->address }}</td>
                                <td>{{ $shop->description }}</td>

                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button type="button" aria-haspopup="true" aria-expanded="false"
                                            data-toggle="dropdown"
                                            class="mb-2 mr-2 dropdown-toggle btn btn-outline-primary">Action</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                            <a href="{{ route('shops.show', $shop->id) }}">

                                                <button type="button" tabindex="0" class="dropdown-item">View
                                                    Detail</button></a>

                                            <a href="{{ route('shops.edit', $shop->id) }}">
                                                <button type="button" tabindex="0"
                                                    class="dropdown-item">Edit</button></a>
                                            <form action="{{ route('shops.destroy', $shop->id) }}" method="POST">
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
                {{ $shops->links() }}

            </div>
        </div>
    </div>
@endsection
