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
  <!-- ===========================table============================================== -->
  <div class="card">
                           <div class="card-header">
                              <div class="card-title">Faculty List</div>
                           </div>
                           <div class="card-body">
                              <div class="">
                                 <div class="table-responsive">
                                    <table id="example1" class="table table-bordered text-nowrap key-buttons">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Faculty Name</th>
                                            
                                             <th>Photo</th>
                                             <th>Designation</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @if(isset($faculty))
                                          @foreach($faculty as $faculty)
                                          <tr>
                                             <td>{{$loop->iteration}}</td>
                                             <td>{{$faculty->faculty_name}}</td>
                                             <td>
                                                @if($faculty->image)
                                                <img src="{{asset('public/faculty/'.$faculty->image)}}" height="75px" width="75px">
                                                @else
                                                <img src="{{asset('public/website/images/no-image-available-icon-6.jpg')}}" height="75px" width="150px">
                                                @endif
                                             </td>
                                             <td>{{$faculty->designation}}</td>
                                             <td><a href="{{route('admin.edit_faculty',$faculty->id)}}" class="btn btn-primary">Edit</a>
                                                <a href="" class="btn btn-danger">Delete</a></td>
                                            
                                       
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
                  