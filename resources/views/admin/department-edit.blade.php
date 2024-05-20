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
                          <h3 class="card-title">Edit College</h3>
                       </div>
                    
                       <div class="card-body">
                          <form action="{{route('admin.departmet.update')}}" method="post" enctype="multipart/form-data">
                             @csrf
                             <input type="hidden" name="college_id" value="{{@$college_details->id}}">
                             <div class="row">

                                <div class="col-sm-12 col-md-6">
                                   <div class="form-group">
                                      <label class="form-label">College Name <font color="red">(*)</font></label>
                                      <input type="text" class="form-control" name="department_name" value="{{@$college_details->department_name}}" placeholder="College Name">
                                   </div>
                                </div>

                                <div class="col-sm-12 col-md-3">
                                   <div class="form-group">
                                      <label class="form-label">College Website</label>
                                      <input type="text" class="form-control" name="collegewebsite" value="{{@$college_details->collegewebsite}}" placeholder="College Website">
                                   </div>
                                </div>
                                <div class="col-sm-12 col-md-3">
                                   <div class="form-group">
                                      <label class="form-label">College Estd In</label>
                                      <input type="text" class="form-control" name="college_estd_in" value="{{@$college_details->college_estd_in}}" placeholder="College Estd In">
                                   </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                   <div class="form-group">
                                      <label class="form-label">Location</label>
                                      <input type="text" class="form-control" name="location" value="{{@$college_details->location}}" placeholder="Location">
                                   </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                   <div class="form-group">
                                      <label class="form-label">College Contact Number</label>
                                      <input type="text" class="form-control" name="contact_number" value="{{@$college_details->contact_number}}" placeholder="College Contact Number">
                                   </div>
                                </div>
                                 
                                <div class="col-sm-12 col-md-6">
                                   <div class="form-group">
                                      <label class="form-label">Slug <font color="red">(*)</font></label>
                                      <input type="text" class="form-control" name="slug" value="{{@$college_details->slug}}" placeholder="Slug">
                                   </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                   <div class="form-group">
                                      <label class="form-label">Thumbnail <font color="red">(1080x1080 px)</font><font color="red">(*)</font></label>
                                      <input type="file" class="form-control" name="thumbnail" placeholder="Thumbnail">
                                      <img src="{{asset('public/thumbnail/'.$college_details->thumbnail)}}" height="75px" width="75px">
                                   </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                   <div class="form-group">
                                      <label class="form-label">Meta Tag</label>
                                      <input type="text" class="form-control" name="seo_title" value="{{@$college_details->seo_title}}" placeholder="SEO Title">
                                   </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                   <div class="form-group">
                                      <label class="form-label">Meta Description</label>
                                      <input type="text" class="form-control" name="seo_description" value="{{@$college_details->seo_description}}" placeholder="SEO Decription">
                                   </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                   <div class="form-group">
                                      <label class="form-label">Description <font color="red">(*)</font></label>
                                      <textarea id="editor" name="description">{!!$college_details->description!!}</textarea>
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
                 <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                       <div class="card">
                          <div class="card-header">
                          <h3 class="card-title">Update Courses</h3>
                       </div>
                    
                       <div class="card-body">
                             <div class="row">
                                 <div class="col-sm-12 col-md-12">
                                    <table class="table table-bordered" id="dynamicTable">  
                                      <tr>
                                          <th>Course</th>
                                          <th>Total Fees</th>
                                          <th>No of Seats</th>
                                          <th>Eligibility</th>
                                          <th>Duration</th>
                                          <th>Age Limit</th>
                                          <th>Action</th>
                                      </tr>
                                      @php
                                      $coursecollege=DB::Table('collegewisecourse')->where('college',$college_details->id)->get();



                                      @endphp
                                      @if(isset($college_details))
                                      @foreach($coursecollege as $list)
                                      <form method="post" action="{{route('admin.update_course_college')}}">
                                        @csrf
                                        <input type="hidden" name="course_college" value="{{$list->id}}">
                                      <tr> 

                                      @php
                                      $course_name=DB::Table('course')->where('id',$list->course)->first();
                                      @endphp 
                                          <td>{{$course_name->course_name}}</td>  
                                          <td><input type="text" name="total_fees" value="{{@$list->total_fees}}" class="form-control" /></td>  
                                          <td><input type="text" name="no_of_seates" class="form-control" value="{{@$list->no_of_seates}}"/></td> 
                                          <td><input type="text" name="eligibility" class="form-control" value="{{@$list->eligibility}}"/></td>
                                          <td><input type="text" name="duration" class="form-control" value="{{@$list->duration}}"/></td>    
                                          <td><input type="text" name="age_limit" value="{{@$list->age_limit}}" class="form-control" /></td>   
                                          <td><button type="submit" name="add" id="add" class="btn btn-success">Update Course</button> <a href="{{route('admin.delete.course.college', $list->id)}}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a></td>  
                                      </tr>  
                                      </form>
                                      @endforeach
                                      @endif
                                      @php
                  $course_list=DB::Table('course')->where('status',1)->get();
                  @endphp

                                      <form method="post" action="{{route('admin.add_course_inCollege')}}">
                                        @csrf
                                        <input type="hidden" name="college" value="{{$college_details->id}}">
                                      <tr> 
                                          <td><select name="course" class="form-control">@foreach($course_list as $list)<option value="{{$list->id}}">{{$list->course_name}}</option>@endforeach/</select></td>  
                                          <td><input type="text" name="total_fees" class="form-control" /></td>  
                                          <td><input type="text" name="no_of_seates" class="form-control"/></td> 
                                          <td><input type="text" name="eligibility" class="form-control"/></td>
                                          <td><input type="text" name="duration" class="form-control"/></td>    
                                          <td><input type="text" name="age_limit" class="form-control" /></td>   
                                          <td><button type="submit" name="add" id="add" class="btn btn-success">Add Course</button></td>  
                                      </tr>  
                                      </form>

                                  </table> 
                                 </div>
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
                  