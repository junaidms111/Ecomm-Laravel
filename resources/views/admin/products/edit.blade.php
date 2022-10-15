@extends('layouts.admin')
@section('product-active', 'active')
@section('admin-content')

    <div class="row">
        <div class="col-lg-6">
            <h2 class="page-header">
                Update Product
            </h2>
            <form method="POST" action="{{ route('products.update', ['id' => $product->id]) }}">
                @csrf
                <div class="form-group">
                    <label for="category_id">Category <span style="color: red">*</span></label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">Title <span style="color: red">*</span></label>
                    <input type="text" value="{{ $product->title }}" class="form-control" name="title" id="title"
                        placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label for="price">Price <span style="color: red">*</span></label>
                    <input type="text" value="{{ $product->price }}" name="price" class="form-control" id="price"
                        placeholder="Enter Price">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity <span style="color: red">*</span></label>
                    <input type="text" value="{{ $product->quantity }}" name="quantity" class="form-control"
                        id="quantity" placeholder="Enter Quantity">
                </div>
                <div class="form-group">
                    <label for="model">Model <span style="color: red">*</span></label>
                    <input type="text" value="{{ $product->model }}" name="model" class="form-control" id="model"
                        placeholder="Enter Model">
                </div>
                <div class="form-group">
                    <label for="company">Company <span style="color: red">*</span></label>
                    <input type="text" value="{{ $product->company }}" name="company" class="form-control" id="company"
                        placeholder="Enter Company">
                </div>
                <div class="form-group">
                    <label for="description">Description <span style="color: red">*</span></label>
                    <textarea class="form-control" name="description" id="description" rows="4">{{ $product->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Upload an Image</label>
                    <input type="file" class="form-control-file" id="image">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        @endsection
