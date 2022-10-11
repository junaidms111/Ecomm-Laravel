@extends('layouts.admin')
@section('admin-content')

<div class="row">
    <div class="col-lg-6">
        <h2 class="page-header">
            View Categories
        </h2>
        <form>
            <div class="form-group" >
              <label for="title">Title <span style="color: red">*</span></label>
              <input type="text" value="{{$category->title}}" class="form-control" name="title" id="title" placeholder="Enter Title">
            </div>
            <div class="form-group">
              <label for="slug">Slug <span style="color: red">*</span></label>
              <input type="text" value = "{{$category->slug}}"name="slug" class="form-control" id="slug" placeholder="Enter Slug">
            </div>
            <div class="form-group">
                <label for="description">Description <span style="color: red">*</span></label>
                <textarea class="form-control" name="description" id="description" rows="4">{{$category->description}}</textarea>
              </div>
              <div class="form-group">
                <label for="image">Image:</label>
                <img src="{{ asset($category->image) }}" />

              </div>
          </form>
@endsection
