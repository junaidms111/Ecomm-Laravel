@extends('layouts.admin')
@section('product-active', 'active')
@section('admin-content')
<div class="row">
    <div class="col-lg-6">
        <h2 class="page-header">
            Add Customer
        </h2>
        <form>
            <div class="form-group" >
              <label for="name">Name <span style="color: red">*</span></label>
              <input type="text"class="form-control" name="name" id="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="email">Email <span style="color: red">*</span></label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="password">Password <span style="color: red">*</span></label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
@endsection
