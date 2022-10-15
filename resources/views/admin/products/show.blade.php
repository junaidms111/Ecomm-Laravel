@extends('layouts.admin')
@section('product-active', 'active')
@section('admin-content')
    <div class="row">
        <div class="col-lg-6">
            <h2 class="page-header">
                View Products
            </h2>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" value="{{ $product->title }}" class="form-control" id="title" disabled
                    placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" value="{{ $product->price }}" class="form-control" id="price" disabled
                    placeholder="Enter Price">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" value="{{ $product->quantity }}" class="form-control" id="quantity" disabled
                    placeholder="Enter Quantity">
            </div>
            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" value="{{ $product->model }}" class="form-control" id="model" disabled
                    placeholder="Enter Model">
            </div>
            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" value="{{ $product->company }}" class="form-control" id="company" disabled
                    placeholder="Enter Company">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="4" disabled>{{ $product->description }}</textarea>
            </div>
        @endsection
