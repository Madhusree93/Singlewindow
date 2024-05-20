@extends('admin.layouts.app')
@section('header')
<title>Edit Gallery | Admin Panel</title>
@include('admin.include.header')
@endsection
@section('sidebar')
@include('admin.include.sidebar')
@endsection

<?php
$gallery_list = DB::table('gallery_tabs')->where('status','=',1)->get();

?>

@section('content')

<div class="page-header">
                     <div class="page-leftheader">
                        <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><i class="fe fe-home mr-2 fs-14"></i>Home</li>
                           <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.dashboard')}}">admin Dashboard</a></li>
                        </ol>
                     </div>
                     
                  </div>
<!--End Page header-->

<!-- Row-1 -->
<div class="row">
   <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card">
         <div class="card-header">
            <h3 class="card-title">Edit Gallery</h3>
         </div>
         
         <div class="card-body">
            <form action="{{route('admin.gallery.update', $gallery->id)}}" method="post" enctype="multipart/form-data">
               @csrf
               @method('PUT')
               <div class="row">
                  <div class="col-sm-12 col-md-4">
                     <div class="form-group">
                        <label class="form-label">Select Category<font color="red">*</font></label>
                        <select class="form-control" name="tab_name">
                          <option value="" disabled="">---Select---</option>
                          @if($gallery->tab_name)
                          @foreach($gallery_list as $list)
                          <option value="{{$list->tab_name}}" {{ $list->tab_name == $gallery->tab_name ? 'selected' : '' }}>{{$list->tab_name}}</option>
                          @endforeach
                          @endif
                        </select>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                     <div class="form-group">
                        <label class="form-label">Title<font color="red">*</font></label>
                        <input type="text" class="form-control" name="title" value="{{$gallery->title}}" placeholder="Title">
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                     <div class="form-group">
                        <label class="form-label">Image <font color="red">*</font><span class="text-red">*</span></label>
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" name="image">
                           <label class="custom-file-label">Choose file</label>
                        </div>
                        @if($gallery->image)
                        <img src="{{asset('public/website/images/gallery/'. $gallery->image)}}" height="75px" width="75px">
                        @else
                        <img src="{{asset('public/website/images/no-image-available-icon-6.jpg')}}" height="75px" width="150px">
                        @endif
                     </div>
                  </div>
                 {{--<div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description">{{$gallery->description}}</textarea>
                     </div>
                  </div>--}}
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


</div>
</div>

</div>




@endsection
@section('footer')
@include('admin.include.footer')
@endsection