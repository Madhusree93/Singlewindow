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

<?php
$college_list= DB::table('colleges')->get();
?>
            
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
            <form action="{{route('admin.department_insert')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="row">
            
               <div class="col-sm-12 col-md-6">
                  <div class="form-group ">
											<label class="form-label">College Name</label>
											<select class="form-control select2 custom-select" name="college_id" data-placeholder="Choose College">
												<option label="Choose College">
												</option>
                                                @if(isset($college_list))
                                                @foreach($college_list as $college)
												<option value="{{$college->college_name}}">{{$college->college_name}}</option>
                                                @endforeach
                                                @endif
											</select>
										</div>
               </div>

                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Department Name</label>
                        <input type="text" class="form-control" name="department_name" value="{{old('department_name')}}" placeholder="Enter Department">
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
                  