@extends('layouts.admin')
@section('category-active', 'active')
@section('admin-content')

<div class="row">
    <div class="col-lg-6">
        <h2 class="page-header">
            Add Category
        </h2>
        <form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group" >
              <label for="title">Title <span style="color: red">*</span></label>
              <input type="text" class="form-control" value="{{old('title')}}"name="title" id="title" placeholder="Enter Title">
              @error('title')
                  <div class="error"> {{$message}}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="slug">Slug <span style="color: red">*</span></label>
              <input type="text" name="slug" value ="{{old('slug')}}"class="form-control" id="slug" placeholder="Enter Slug">
              @error('slug')
                  <div class="error">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group">
                <label for="description">Description <span style="color: red">*</span></label>
                <textarea class="form-control" value="{{old('description')}}"name="description" id="description" rows="4"></textarea>
                @error('description')
                    <div class="error">{{$message}}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="image">Upload an Image</label>
                <input type="file" class="form-control-file" id="image">
              </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
@endsection
