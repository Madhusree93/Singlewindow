@extends('admin.layouts.app')
@section('header')
<title>Manage College | Admin Panel</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
            <h3 class="card-title">Add College</h3>
         </div>
      
         <div class="card-body">
            <form action="{{route('admin.college_insert')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="row">

                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">College Name <font color="red">(*)</font></label>
                        <input type="text" class="form-control" name="college_name" value="{{old('college_name')}}" placeholder="College Name">
                     </div>
                  </div>

                  <div class="col-sm-12 col-md-3">
                     <div class="form-group">
                        <label class="form-label">College Website</label>
                        <input type="text" class="form-control" name="college_website" value="{{old('college_website')}}" placeholder="College Website">
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-3">
                     <div class="form-group">
                        <label class="form-label">College Estd In</label>
                        <input type="text" class="form-control" name="college_estd" value="{{old('college_estd')}}" placeholder="College Estd In">
                     </div>
                  </div>

                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Location</label>
                        <input type="text" class="form-control" name="location" value="{{old('location')}}" placeholder="Location">
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">College Contact Number</label>
                        <input type="text" class="form-control" name="college_contact_number" value="{{old('college_contact_number')}}" placeholder="College Contact Number">
                     </div>
                  </div>
               
                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Slug <font color="red">(*)</font></label>
                        <input type="text" class="form-control" name="slug" value="{{old('slug')}}" placeholder="Slug">
                     </div>
                  </div>

                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Thumbnail <font color="red">(1080x1080 px)</font><font color="red">(*)</font></label>
                        <input type="file" class="form-control" name="cover_photo" value="{{old('cover_photo')}}" placeholder="Thumbnail">
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
                              <div class="card-title">Course</div>
                           </div>
                           <div class="card-body">
                              <div class="">
                                 <div class="table-responsive">
                                    <table id="example1" class="table table-bordered text-nowrap key-buttons">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>College Name</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @if(isset($college))
                                          @foreach($college as $college)
                                          <tr>
                                             <td>{{$loop->iteration}}</td>
                                             <td>{{$college->college_name}}</td>
                                             <td><a href="#">Edit</a></td>
                                          </tr>
                                          @endforeach
                                          @endif
                                       </tbody>
                                 
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <!-- ======================================table=========================================== -->

               </div>
            </div>
            
         </div>

            @endsection
@section('footer')
   
    @include('admin.include.footer')
@endsection
                  