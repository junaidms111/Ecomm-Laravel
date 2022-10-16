@extends('layouts.admin')
@section('category-active', 'active')
@section('admin-content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header">
                Categories
            </h1>
        </div>
        <div class="col-lg-6">
            <h1 class="page-header  text-right">
                <a href="{{ route('categories.create') }}" class="btn btn-primary">Add New Category</a>
            </h1>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Description</th>
                <th scope="col">Created At</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ Str::substr($category->description, 0, 30) }}....</td>
                    <td> {{ \Carbon\Carbon::parse($category->created_at)->diffForhumans() }}</td>
                    <td>
                        @if ($category->status == 1)
                            <span class="badge badge-primary">Active</span>
                        @else
                            <span class="badge badge-danger">In-active</span>
                        @endif
                    <td>
                        <a href="{{ route('categories.show', ['id' => $category->id]) }}"
                            class="btn btn-sm btn-info">View</a> |
                        <a href="{{ route('categories.edit', ['id' => $category->id]) }}"
                            class="btn btn-sm btn-primary">Edit</a> |
                        <a onclick="return confirm('Are you sure?')"
                            href="{{ route('categories.delete', ['id' => $category->id]) }}"
                            class="btn btn-sm btn-danger">Delete</a> |
                        <a onclick="return confirm('Are you sure?')"
                            href="{{ route('categories.delete', ['id' => $category->id]) }}"
                            class="btn btn-sm btn-success">Change Status</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- /.row -->
@endsection
