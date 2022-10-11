@extends('layouts.admin')
@section('admin-content')

<div class="row">
    <div class="col-lg-6">
        <h2 class="page-header">
            View Products
        </h2>
        <form>
            <div class="form-group" >
              <label for="title">Title <span style="color: red">*</span></label>
              <input type="text" value="{{$prodict->title}}" class="form-control" name="title" id="title" placeholder="Enter Title">
            </div>
            <div class="form-group">
              <label for="price">Price <span style="color: red">*</span></label>
              <input type="text" value = "{{$product->slug}}"name="price" class="form-control" id="price" placeholder="Enter Price">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity <span style="color: red">*</span></label>
                <input type="text" value = "{{$product->quantity}}"name="quantity" class="form-control" id="quantity" placeholder="Enter Quantity">
              </div>
              <div class="form-group">
                <label for="model">Model <span style="color: red">*</span></label>
                <input type="text" value = "{{$product->model}}"name="model" class="form-control" id="model" placeholder="Enter Model">
              </div>
              <div class="form-group">
                <label for="company">Company <span style="color: red">*</span></label>
                <input type="text" value = "{{$product->company}}"name="company" class="form-control" id="company" placeholder="Enter Company">
              </div>
            <div class="form-group">
                <label for="description">Description <span style="color: red">*</span></label>
                <textarea class="form-control" name="description" id="description" rows="4">{{$product->description}}</textarea>
              </div>
              <div class="form-group">
                <label for="image">Image:</label>
                <img src="{{ asset($product->image) }}" />

              </div>
          </form>
@endsection