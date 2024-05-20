@extends('admin.layouts.app')
@section('header')
<title>Manage Course | Admin Panel</title>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
@include('admin.include.header')
@endsection
@section('sidebar')
@include('admin.include.sidebar')
@endsection


@section('content') 
            
                  <!--/app header-->                                    <!--Page header-->
                  <div class="page-header">
                     <div class="page-leftheader">
                      
                        <ol class="breadcrumb">
                           
                        </ol>
                     </div>
                     <div class="page-rightheader">
                      @include('notification')
                     </div>
                 
                  </div>

<!-- Row-1 -->
   <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12">
         <div class="card">
            <div class="card-header">
            <h3 class="card-title">Edit Course</h3>
         </div>
      
         <div class="card-body">
            <form action="{{route('admin.course_update')}}" method="post" enctype="multipart/form-data">
               @csrf
               <input type="hidden" value="{{ $id }}" name="id">
               <div class="row">

                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Course Name <font color="red">(*)</font></label>
                        <input type="text" class="form-control" name="course_name" value="{{$edit->course_name}}" placeholder="Title">
                     </div>
                  </div>

                  

                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Course Type <font color="red">(*)</font></label>
                        <select class="form-control select2 select2-hidden-accessible" name="course_type">
                           <option value="UG" {{ ( $edit->course_type == "UG") ? 'selected' : '' }}>UG</option>
                           <option value="PG" {{ ( $edit->course_type == "PG") ? 'selected' : '' }}>PG</option>
                           <option value="Diploma" {{ ( $edit->course_type == "Diploma") ? 'selected' : '' }}>Diploma</option>
                        </select>
                     </div>
                  </div>

                  <!--<div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Order</label>
                        <input type="number" class="form-control" name="listing_order" value="{{$edit->listing_order}}" placeholder="Order">
                     </div>
                  </div>-->
                   
                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Title <font color="red">(*)</font></label>
                        <input type="text" class="form-control" name="title" value="{{$edit->title}}" placeholder="Title">
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Slug <font color="red">(*)</font></label>
                        <input type="text" class="form-control" name="slug" value="{{$edit->slug}}" placeholder="Slug">
                     </div>
                  </div>

                  <div class="col-sm-6 col-md-6">
                     <div class="form-group">
                     <label class="form-label">Number of Seats</label>
                         <input type="text" class="form-control" name="slug" value="{{$edit->number_of_seats}}" placeholder="Slug">
                      
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Front Image  <font color="red">(1080x1080 px)</font><font color="red">(*)</font></label>
                        <div class="custom-file">
                           <input type="file"  value="{{$edit->image}}" name="image">
                           <img src="{{asset('public/website/images/course/'.$edit->image)}}" height="75px" width="75px">
                           
                        </div>
                     </div>
                  </div>

                  <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        <label class="form-label">Meta Tag</label>
                        <input type="text" name="meta_tag" value="{{$edit->meta_tag}}" class="form-control"> 
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        <label class="form-label">Meta Description</label>
                        <input type="text" name="meta_description" value="{{$edit->meta_description}}" class="form-control"> 
                     </div>
                  </div>

                      

                 <!-- <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        <label class="form-label">Short Description</label>
                        <input type="text" name="short_description" value="{{$edit->short_description}}" class="form-control"> 
                     </div>
                  </div>-->
          
                  <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        <label class="form-label">Description <font color="red">(*)</font></label>
                        <textarea id="editor" name="description">{{$edit->description}}</textarea>
                     </div>
                  </div>
                  
                  <div class="form-group mb-0 mt-5 row justify-content-end">
                     <div class="col-md-10">
                        <button type="submit" class="btn btn-primary">Update</button>
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
   
               @endsection
   @section('footer')
       @include('admin.include.footer')
       
   @endsection