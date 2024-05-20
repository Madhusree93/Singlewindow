@extends('admin.layouts.app') @section('header') <title>Manage career | Admin Panel</title> @include('admin.include.header') @endsection @section('sidebar') @include('admin.include.sidebar') @endsection <?php
$gallery_list = DB::table('gallery_tabs')->where('status','=',1)->get();

?> @section('content')
<!--/app header-->
<!--Page header-->
<div class="page-header">
  <div class="page-leftheader"></div>
  <div class="page-rightheader"> @include('notification') </div>
</div>
<!-- Row-1 -->
<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Add Career</h3>
      </div>
      <div class="card-body">
        <form action="{{route('admin.add.career')}}" method="post" enctype="multipart/form-data"> 
          @csrf 
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <div class="form-group">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Title">
              </div>
            </div>
             <div class="col-sm-12 col-md-12">
               <div class="form-group">
                  <label class="form-label">Description</label>
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
    <div class="card-title">Career</div>
  </div>
  <div class="card-body">
    <div class="">
      <div class="table-responsive">
        <table id="example1" class="table table-bordered text-nowrap key-buttons">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <!-- <th>Status</th> -->
              <th>Action</th>
            </tr>
          </thead>
          <tbody> 
            @foreach($AdminCareer as $list)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$list->title}}</td>
              <!-- <td></td> -->
              <td>
                <a href="{{route('admin.delete.career', $list->id)}}" onclick="return confirm('Are you sure to Delete?');" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>

                <a href="{{route('admin.edit.career', $list->id)}}" onclick="return confirm('Are you sure to edit?');" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
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