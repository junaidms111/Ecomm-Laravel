@extends('layouts.admin')
@section('category-active', 'active')
@section('admin-content')
    <div class="row">
        <div class="col-lg-6">
            <h2 class="page-header">
                View Categories
            </h2>
            <form>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" value="{{ $category->title }}" class="form-control" name="title" id="title"
                        placeholder="Enter Title" disabled>
                </div>
                <div class="form-group">
                    <label for="slug">Slug</span></label>
                    <input type="text" value="{{ $category->slug }}" name="slug" class="form-control" id="slug"
                        placeholder="Enter Slug" disabled>
                </div>
                <div class="form-group">
                    <label for="description">Description </label>
                    <textarea class="form-control" name="description" id="description" rows="4" disabled>{{ $category->description }}</textarea>
                </div>

            </form>
        </div>
        <div class="col-lg-6">
            <div class="page-header">
                Products
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category->products as $product)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $product->title }}</td>
                            <td>
                                <a href="{{ route('products.show', ['id' => $product->id]) }}"
                                    class="btn btn-sm btn-info">View</a>
                                |
                                <a href="{{ route('products.delete', ['id' => $product->id]) }}"
                                    class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
