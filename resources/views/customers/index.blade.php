@extends('layouts.bar')
@section('title', 'Customer');
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
                        Customers List
                        <a class="text-success" href="">
                            <button type="button" class="btn btn-primary"> <i class="metismenu-icon pe-7s-plus"></i>
                                Create New Customer</button></a>
                    </div>
                </h5>
                <table class="table table-striped table-bordered table-hover">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $key => $customer)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->address }}</td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button type="button" aria-haspopup="true" aria-expanded="false"
                                            data-toggle="dropdown"
                                            class="mb-2 mr-2 dropdown-toggle btn btn-outline-primary">Action</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                            <a href="{{ route('customers.show', $customer->id) }}">

                                                <button type="button" tabindex="0" class="dropdown-item">View
                                                    Detail</button></a>

                                            <a href="{{ route('customers.edit', $customer->id) }}">
                                                <button type="button" tabindex="0"
                                                    class="dropdown-item">Edit</button></a>
                                            <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">
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
                {{ $customers->links() }}

            </div>
        </div>
    </div>
@endsection
