@extends('admin.layouts.app') @section('header') <title>Manage Blog | Admin Panel</title> @include('admin.include.header') @endsection @section('sidebar') @include('admin.include.sidebar') @endsection @section('content')
<!--/app header-->
<!--Page header-->
<div class="page-header">
  <div class="page-rightheader"> @include('notification') </div>
</div>
<!-- Row-1 -->
<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Add Blog</h3>
      </div>
      <div class="card-body">
        <form action="{{route('admin.add.blog')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="form-group">
                <label class="form-label">Title <font color="red">(*)</font></label>
                <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Title">
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="form-group">
                <label class="form-label">slug <font color="red">(*)</font></label>
                <input type="text" class="form-control" name="slug" value="{{old('slug')}}" placeholder="Slug" required="">
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="form-group">
                <label class="form-label">Image <font color="red">(512x512 px)</font>
                  <font color="red">(*)</font>
                </label>
                <input type="file" class="form-control" name="image" value="{{old('image')}}" placeholder="Image">
              </div>
            </div>
            <div class="col-sm-12 col-md-12">
              <div class="form-group">
                <label class="form-label">Short Description <font color="red">(*)</font></label>
                <input type="text" class="form-control" name="short_description" placeholder="Short Description">
              </div>
            </div>

            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label class="form-label">Meta Tag</label>
                <input type="text" class="form-control" name="meta_tag" value="{{old('meta_tag')}}" placeholder="Meta Tag">
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label class="form-label">Meta Description</label>
                <input type="text" class="form-control" name="meta_description" value="{{old('meta_description')}}" placeholder="Meta Description">
              </div>
            </div>
            <div class="col-sm-12 col-md-12">
              <div class="form-group">
                <label class="form-label">Description <font color="red">(*)</font></label>
                <textarea id="editor" name="description"></textarea>
              </div>
            </div>
            <div class="form-group mb-0 mt-5 row justify-content-end">
              <div class="col-md-10">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ==================row end================================= -->
<!-- ===========================table============================================== -->
<div class="card">
  <div class="card-header">
    <div class="card-title">Faculty List</div>
  </div>
  <div class="card-body">
    <div class="">
      <div class="table-responsive">
        <table id="example1" class="table table-bordered text-nowrap key-buttons">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Photo</th>

              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($blog_list as $list)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$list->title}}</td>
              <td><img src="{{asset('public/blog/'.$list->image)}}" width="75px" height="75px"></td>

              <td>
                <a href="{{route('admin.delete.blog', $list->id)}}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                <a href="{{route('admin.edit.blog', $list->id)}}" onclick="return confirm('Are you sure to edit?');" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- ======================================table=========================================== -->
</div>
</div>
</div> @endsection @section('footer') @include('admin.include.footer') @endsection