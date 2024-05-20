@extends('admin.layouts.app')
@section('header')
<title>Manage SEO Settings | Admin Panel</title>
@include('admin.include.header')
@endsection
@section('sidebar')
@include('admin.include.sidebar')
@endsection


@section('content') 
            
                  <!--/app header-->                                    <!--Page header-->
                  <div class="page-header">
                     <div class="page-rightheader">
                        @include('notification')
                     </div>
                 
                  </div>

<!-- Row-1 -->
   <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12">
         <div class="card">
            <div class="card-header">
            <h3 class="card-title">SEO Settings</h3>
         </div>
      
         <div class="card-body">
            <form action="{{route('admin.update.seo')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="row">

                      <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        <label class="form-label">Header Script</label>
                        <textarea name="google_analitics" class="form-control" style="width: 100%; height: 150px">{{$seo->google_analitics}}</textarea>
                     </div>
                  </div>
                   
                  <!--<div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Google Search Console</label>
                        <textarea name="google_search_console"  class="form-control" style="width: 100%; height: 150px">{{$seo->google_search_console}}</textarea>
                     </div>
                  </div>-->

                               
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
            
         </div>

            @endsection
@section('footer')
    @include('admin.include.footer')
@endsection
                  