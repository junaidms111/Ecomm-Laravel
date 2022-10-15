@extends('layouts.admin')
@section('customer-active', 'active')
@section('admin-content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header">
                Customers List
            </h1>
        </div>
        <div class="col-lg-6">
            <h1 class="page-header  text-right">
                <a href="{{ route('customers.create') }}" class="btn btn-primary">Add New Customer</a>
            </h1>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Created At</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($customers as $customer)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td> {{ \Carbon\Carbon::parse($customer->created_at)->diffForhumans() }}</td>
                    <td>
                        @if ($customer->status == 1)
                            <span class="badge badge-primary">Active</span>
                        @else
                            <span class="badge badge-danger">In-active</span>
                        @endif
                    <td>
                        <a href="{{ route('customers.edit', ['id' => $customer->id]) }}"
                            class="btn btn-sm btn-info">Edit</a> |
                        {{-- <a href="{{ route('categories.edit', ['id' => $product->id]) }}" class="btn btn-sm btn-primary">Edit</a> |
                <a href="{{ route('categories.delete', ['id' => $product->id]) }}"  class="btn btn-sm btn-danger">Delete</a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- /.row -->
@endsection
