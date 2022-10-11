@extends('layouts.admin')
@section('product-active', 'active')
@section('admin-content')
<div class="row">
    <div class="col-lg-6">
        <h2 class="page-header">
            Add Product
        </h2>
        <form>
            <div class="form-group" >
              <label for="title">Title <span style="color: red">*</span></label>
              <input type="text"class="form-control" name="title" id="title" placeholder="Enter Title">
            </div>
            <div class="form-group">
              <label for="price">Price <span style="color: red">*</span></label>
              <input type="text" name="price" class="form-control" id="price" placeholder="Enter Price">
            </div>
            <div class="form-group">
                <label for="quantity">Qunantity <span style="color: red">*</span></label>
                <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Enter Quantity">
              </div>
              <div class="form-group">
                <label for="model">Model <span style="color: red">*</span></label>
                <input type="text" name="model" class="form-control" id="model" placeholder="Enter Model">
              </div>
              <div class="form-group">
                <label for="company">Company <span style="color: red">*</span></label>
                <input type="text" name="company" class="form-control" id="company" placeholder="Enter Company">
              </div>
            <div class="form-group">
                <label for="description">Description <span style="color: red">*</span></label>
                <textarea class="form-control" name="description" id="description" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="image">Upload an Image</label>
                <input type="file" class="form-control-file" id="image">
              </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
@endsection
