@extends('layouts.admin')
@section('product-active', 'active')
@section('admin-content')
    <div class="row">
        <div class="col-lg-6">
            <h2 class="page-header">
                Add Product
            </h2>
            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="category_id">Category <span style="color: red">*</span></label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">Title <span style="color: red">*</span></label>
                    <input type="text" value="{{ old('title') }}" class="form-control" name="title" id="title"
                        placeholder="Enter Title">
                    @error('title')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">Price <span style="color: red">*</span></label>
                    <input type="number" name="price" value="{{ old('price') }}" class="form-control" id="price"
                        placeholder="Enter Price">
                    @error('price')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="quantity">Qunantity <span style="color: red">*</span></label>
                    <input type="number" name="quantity" value="{{ old('quantity') }}" class="form-control" id="quantity"
                        placeholder="Enter Quantity">
                    @error('quantity')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="model">Model <span style="color: red">*</span></label>
                    <input type="text" name="model" value="{{ old('model') }}" class="form-control" id="model"
                        placeholder="Enter Model">
                    @error('model')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="company">Company <span style="color: red">*</span></label>
                    <input type="text" name="company" value="{{ old('company') }}" class="form-control" id="company"
                        placeholder="Enter Company">
                    @error('company')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description <span style="color: red">*</span></label>
                    <textarea class="form-control" name="description" id="description" rows="4"> {{ old('description') }} </textarea>
                    @error('description')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Upload an Image</label>
                    <input type="file" name="image" class="form-control-file" id="image">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        @endsection
