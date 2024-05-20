@extends('admin.layouts.app')
@section('header')
<title>Manage Course | Admin Panel</title>
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
            <h3 class="card-title">Add Faculty</h3>
         </div>
      
         <div class="card-body">
            <form action="{{route('admin.submit.teacher')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="row">

                      <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Faculty Name</label>
                        <input type="text" class="form-control" name="faculty_name" value="{{old('faculty_name')}}" placeholder="Faculty Name">
                     </div>
                  </div>
                   
                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Designation</label>
                        <input type="text" class="form-control" name="designation" value="{{old('designation')}}" placeholder="Designation">
                     </div>
                  </div>

                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" value="{{old('image')}}" placeholder="Image">
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
                  