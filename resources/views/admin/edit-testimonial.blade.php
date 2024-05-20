@extends('admin.layouts.app')
@section('header')
<title>Testimonial | Admin Panel</title>
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
            <h3 class="card-title">Add Testimonial</h3>
         </div>
      
         <div class="card-body">
            <form action="{{route('admin.update.testimonial')}}" method="post" enctype="multipart/form-data">
               @csrf
               <input type="hidden" name="id" value="{{$testimonial_details->id}}">
               <div class="row">

                      <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Student Name <font color="red">*</font></label>
                        <input type="text" class="form-control" name="student_name" value="{{$testimonial_details->student_name}}" placeholder="Student Name" required="">
                     </div>
                  </div>
                   
                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Testimonial <font color="red">*</font></label>
                        <input type="text" class="form-control" name="testimonial" value="{{$testimonial_details->testimonial}}"  placeholder="Testimonial" required="">
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Student Image <font color="red">(100x100 px)*</font></label>
                        <input type="file" class="form-control" name="image" placeholder="Testimonial" >
                        <img src="{{asset('public/testimonial/'.$testimonial_details->image)}}" width="75px" height="75px">
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
            
         </div>

            @endsection
@section('footer')
    @include('admin.include.footer')
@endsection
                  