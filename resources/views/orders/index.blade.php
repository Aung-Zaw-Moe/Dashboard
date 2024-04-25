@extends('layouts.bar')
@section('title', 'Orders');
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
                        Order List
                        <a class="text-success" href="{{ route('orders.create') }}">
                            <button type="button" class="btn btn-primary"> <i class="metismenu-icon pe-7s-plus"></i>
                                Create New Order</button></a>
                    </div>
                </h5>
                <table class="table table-striped table-bordered table-hover">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Shop Name</th>
                            <th>Product Name</th>
                            <th>Customer Name</th>
                            <th>QTY</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $key => $order)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $order->shop->name ?? 'N/A' }}</td>

                                <td>{{ $order->product->name ?? 'N/A' }}</td>

                                <td>{{ $order->customer->name ?? 'N/A' }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button type="button" aria-haspopup="true" aria-expanded="false"
                                            data-toggle="dropdown"
                                            class="mb-2 mr-2 dropdown-toggle btn btn-outline-primary">Action</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                            <a href="{{ route('orders.show', $order->id) }}">

                                                <button type="button" tabindex="0" class="dropdown-item">View
                                                    Detail</button></a>

                                            <a href="{{ route('orders.edit', $order->id) }}">
                                                <button type="button" tabindex="0"
                                                    class="dropdown-item">Edit</button></a>
                                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
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
                {{ $orders->links() }}

            </div>
        </div>
    </div>
@endsection
