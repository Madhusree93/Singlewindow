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
        <form action="{{route('admin.update.blog')}}" method="post" enctype="multipart/form-data"> 
         @csrf 
         <input type="hidden" name="id" value="{{@$blog_details->id}}">
         <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="form-group">
                <label class="form-label">Title <font color="red">(*)</font></label>
                <input type="text" class="form-control" name="title" placeholder="Title" value="{{@$blog_details->title}}">
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="form-group">
                <label class="form-label">Slug <font color="red">(*)</font></label>
                <input type="text" class="form-control" name="slug" placeholder="Slug" value="{{@$blog_details->slug}}">
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="form-group">
                <label class="form-label">Image <font color="red">(512x512 px)</font><font color="red">(*)</font></label>
                <input type="file" class="form-control" name="image" placeholder="Image">
                <img src="{{asset('public/blog/'.$blog_details->image)}}" width="75px" height="75px">
              </div>
            </div>
            <div class="col-sm-12 col-md-12">
              <div class="form-group">
                <label class="form-label">Short Description <font color="red">(*)</font></label>
                <input type="text" class="form-control" name="short_description" placeholder="Short Description" value="{{@$blog_details->short_description}}">
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label class="form-label">Meta Tag</label>
                <input type="text" class="form-control" name="meta_tag" placeholder="Meta Tag" value="{{@$blog_details->meta_tag}}">
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label class="form-label">Meta Description</label>
                <input type="text" class="form-control" name="meta_description" placeholder="Meta Description" value="{{@$blog_details->meta_description}}">
              </div>
            </div>
            <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        <label class="form-label">Description <font color="red">(*)</font></label>
                        <textarea id="editor" name="description">{!! $blog_details->description!!}</textarea>
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

</div>
</div>
</div> @endsection @section('footer') @include('admin.include.footer') @endsection