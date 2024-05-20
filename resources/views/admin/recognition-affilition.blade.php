@extends('admin.layouts.app')
@section('header')
<title>Manage Recognition Affilition | Admin Panel</title>
@include('admin.include.header')
@endsection
@section('sidebar')
@include('admin.include.sidebar')
@endsection

<?php
$gallery_list = DB::table('gallery_tabs')->where('status','=',1)->get();

?>

@section('content') 
            
                  <!--/app header-->                                    <!--Page header-->
                  <div class="page-header">
                     <div class="page-leftheader">
                        @include('notification')
                     
                     </div>
                  </div>

<!-- Row-1 -->
   <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12">
         <div class="card">
            <div class="card-header">
            <h3 class="card-title">Add Recognition Affilition</h3>
         </div>
      
         <div class="card-body">
            <form action="{{route('submit.admin.recognition_affilition')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="row">
                   
                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Title</label>
                        <input required="" type="text" class="form-control" name="title" placeholder="Title">
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">File <span class="text-red">*</span></label>
                        <div class="custom-file">
                           <input required="" type="file"  name="file">
                          
                        </div>
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
                    
                  

               </div>
            </div>
            
         </div>

            @endsection
@section('footer')
    @include('admin.include.footer')
@endsection
                  