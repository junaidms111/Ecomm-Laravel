@extends('layouts.admin')
@section('product-active', 'active')
@section('admin-content')

<div class="row">
    <div class="col-lg-6">
        <h2 class="page-header">
            Update Customer Information
        </h2>
        <form>
            <div class="form-group" >
              <label for="name">Name <span style="color: red">*</span></label>
              <input type="text" value="{{$customer->name}}" class="form-control" name="title" id="title" placeholder="Enter Title">
            </div>
            <div class="form-group">
              <label for="email">Email <span style="color: red">*</span></label>
              <input type="email" value = "{{$customer->email}}"name="email" class="form-control" id="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="password">Password <span style="color: red">*</span></label>
                <input type="password" value = "{{$customer->passowrd}}"name="customer" class="form-control" id="customer" placeholder="Enter Name">
              </div>
                  <button type="submit" class="btn btn-primary">Save</button>
          </form>
@endsection
