@extends('layouts.bar')
@section('title', 'Products');
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
                        Products List
                        <a class="text-success" href="{{ route('products.create') }}">
                            <button type="button" class="btn btn-primary"> <i class="metismenu-icon pe-7s-plus"></i>
                                Create New Product</button></a>
                    </div>
                </h5>
                <table class="table table-striped table-bordered table-hover">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Type Name</th>
                            <th>Shop Name</th>
                            <th>Name</th>
                            <th>Photo</th>
                            <th>Price</th>
                            <th>QTY</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key => $product)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $product->type->name ?? 'N/A' }}</td>

                                <td>{{ $product->shop->name ?? 'N/A' }}</td>

                                <td>{{ $product->name }}</td>
                                <td>{{ $product->image }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button type="button" aria-haspopup="true" aria-expanded="false"
                                            data-toggle="dropdown"
                                            class="mb-2 mr-2 dropdown-toggle btn btn-outline-primary">Action</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                            <a href="{{ route('products.show', $product->id) }}">
                                                <button type="button" tabindex="0" class="dropdown-item">View
                                                    Detail</button></a>

                                            <a href="{{ route('products.edit', $product->id) }}">
                                                <button type="button" tabindex="0"
                                                    class="dropdown-item">Edit</button></a>
                                            <form action="{{ route('products.destroy', $product) }}" method="POST">
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
                {{ $products->links() }}

            </div>
        </div>
    </div>
@endsection
