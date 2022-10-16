@extends('layouts.admin')
@section('category-active', 'active')
@section('admin-content')

<div class="row">
    <div class="col-lg-6">
        <h2 class="page-header">
            View Categories
        </h2>
        <form>
            <div class="form-group" >
              <label for="title">Title</label>
              <input type="text" value="{{$category->title}}" class="form-control" name="title" id="title" placeholder="Enter Title" disabled>
            </div>
            <div class="form-group">
              <label for="slug">Slug</span></label>
              <input type="text" value = "{{$category->slug}}"name="slug" class="form-control" id="slug" placeholder="Enter Slug" disabled>
            </div>
            <div class="form-group">
                <label for="description">Description </label>
                <textarea class="form-control" name="description" id="description" rows="4" disabled>{{$category->description}}</textarea>
              </div>

          </form>
@endsection
