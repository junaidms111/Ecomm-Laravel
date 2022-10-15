@extends('layouts.admin')
@section('product-active', 'active')
@section('admin-content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header">
                Products List
            </h1>
        </div>
        <div class="col-lg-6">
            <h1 class="page-header  text-right">
                <a href="{{ route('products.create') }}" class="btn btn-primary">Add New Product</a>
            </h1>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Model</th>
                <th scope="col">Company</th>
                <th scope="col">Created At</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $product->category_id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->price }} PKR</td>
                    <td>{{ $product->quantity ? $product->quantity : 0 }}</td>
                    <td>{{ $product->model }}</td>
                    <td>{{ $product->company }}</td>
                    <td> {{ \Carbon\Carbon::parse($product->created_at)->diffForhumans() }}</td>
                    <td>
                        @if ($product->status == 1)
                            <span class="badge badge-primary">Active</span>
                        @else
                            <span class="badge badge-danger">In-active</span>
                        @endif
                    <td>
                        <a href="{{ route('products.show', ['id' => $product->id]) }}" class="btn btn-sm btn-info">View</a>
                        |
                        <a href="{{ route('products.edit', ['id' => $product->id]) }}"
                            class="btn btn-sm btn-primary">Edit</a> |
                        <a href="{{ route('products.delete', ['id' => $product->id]) }}" class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- /.row -->
@endsection
