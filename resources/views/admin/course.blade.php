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
<?php
$college_list= DB::table('colleges')->get();
?>

<?php
$department_list= DB::table('departments')->get();
?>
            
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
            <h3 class="card-title">Add Course</h3>
         </div>
      
         <div class="card-body">
            <form action="{{route('admin.course.submit')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="row">

                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Course Name <font color="red">(*)</font></label>
                        <input type="text" class="form-control" name="course_name" value="{{old('course_name')}}" placeholder="Title">
                     </div>
                  </div>

                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Course Type <font color="red">(*)</font></label>
                        <select class="form-control select2 select2-hidden-accessible" name="course_type">
                           <option value="UG">UG</option>
                           <option value="PG">PG</option>
                           <option value="Diploma">Diploma</option>
                        </select>
                     </div>
                  </div>
                 

                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">College Name<font color="red">(*)</font></label>
                        <select class="form-control select2 select2-hidden-accessible" name="college_id">
                           <option value="">--Select--</option>
                           @if(isset($college_list))
                           @foreach($college_list as $college_list)
                           <option value="{{$college_list->id}}">{{$college_list->college_name}}</option>
                           @endforeach
                           @endif
                        </select>
                     </div>
                  </div>

                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Department Name</label>
                        <select class="form-control select2 select2-hidden-accessible" name="department_id">
                        <option value="">--Select--</option>
                           @if(isset($department_list))
                           @foreach($department_list as $department_list)
                           <option value="{{$department_list->id}}">{{$department_list->department_name}}</option>
                           @endforeach
                           @endif
                        </select>
                     </div>
                  </div>

                  <!--<div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Order</label>
                        <input type="number" class="form-control" name="listing_order" value="{{old('listing_order')}}" placeholder="Order">
                     </div>
                  </div>-->
                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Slug <font color="red">(*)</font></label>
                        <input type="text" class="form-control" name="slug" value="{{old('slug')}}" placeholder="Slug">
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Front Image  <font color="red">(1080x1080 px)</font><font color="red">(*)</font></label>
                        <div>
                           <input type="file" name="course_photo">
                           
                        </div>
                     </div>
                  </div>

                  <div class="col-sm-12 col-md-3">
                     <div class="form-group">
                        <label class="form-label">Number Of Seats</label>
                        <input type="text" name="number_of_seats" placeholder="Number Of Seats" class="form-control"> 
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-3">
                     <div class="form-group">
                        <label class="form-label">Course Duration</label>
                        <input type="text" name="course_duration" placeholder="Course Duration" class="form-control"> 
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Eligibility</label>
                        <input type="text" name="eligibility" placeholder="Eligibility" class="form-control"> 
                     </div>
                  </div>

                  
                  <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        <label class="form-label">Meta tag</label>
                        <input type="text" name="meta_tag" placeholder="Meta Tag" class="form-control"> 
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        <label class="form-label">Meta Description</label>
                        <input type="text" name="meta_description" placeholder="Meta Description" class="form-control"> 
                     </div>
                  </div>
                  <!--<div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        <label class="form-label">Short Description</label>
                        <input type="text" name="short_description" class="form-control"> 
                     </div>
                  </div>-->
          
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
                              <div class="card-title">Course</div>
                           </div>
                           <div class="card-body">
                              <div class="">
                                 <div class="table-responsive">
                                    <table id="example1" class="table table-bordered text-nowrap key-buttons">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Course Name</th>
                                            
                                             <th>Image</th>
                                             <th>Status</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @if(isset($course))
                                          @foreach($course as $key=>$list)
                                          <tr>
                                             <td>{{ (int)$key+1 }}</td>
                                             <td>{{ $list->course_name }}</td>
                                            
                                             <td>
                                               
                                                <img src="{{asset('public/website/course/'.$list->course_photo)}}" height="75px" width="75px">
                                                
                                             </td>
                              
                                             <td>@if($list->status == '1')
                                                <a href="{{route('admin.course.status', $list->id)}}" class="btn btn-success btn-sm">Active</a>
                                                @else
                                                <a href="{{route('admin.course.status', $list->id)}}" class="btn btn-danger btn-sm">Deactive</a>
                                             @endif
                                             </td>
                                             <td>
                                                
                                                <a href="{{route('admin.delete.course', $list->id)}}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                                                <a href="{{route('admin.edit.course', $list->id)}}" onclick="return confirm('Are you sure to edit?');" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
                                             </td>       
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
                  