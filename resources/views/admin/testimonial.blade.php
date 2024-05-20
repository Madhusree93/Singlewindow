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
            <form action="{{route('admin.add.testimonial')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="row">

                      <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Student Name <font color="red">*</font></label>
                        <input type="text" class="form-control" name="student_name" value="{{old('student_name')}}" placeholder="Student Name" required="">
                     </div>
                  </div>
                   
                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Testimonial <font color="red">*</font></label>
                        <input type="text" class="form-control" name="testimonial" value="{{old('testimonial')}}" placeholder="Testimonial" required="">
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Student Image <font color="red">(100x100 px)*</font></label>
                        <input type="file" class="form-control" name="image" value="{{old('image')}}" placeholder="Testimonial">
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

<!-- ===========================table============================================== -->
                     <div class="card">
                           <div class="card-header">
                              <div class="card-title">Testimonial List</div>
                           </div>
                           <div class="card-body">
                              <div class="">
                                 <div class="table-responsive">
                                    <table id="example1" class="table table-bordered text-nowrap key-buttons">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Name</th>
                                            
                                             <th>Testimonial</th>
                                             <th>Image</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @if(isset($testimonial_list))
                                          @foreach($testimonial_list as $key=>$list)
                                          <tr>
                                             <td>{{ (int)$key+1 }}</td>
                                             <td>{{ $list->student_name }}</td>
                                             <td>{{ $list->testimonial }}</td>
                                            
                                             <td>
                                                
                                                <img src="{{asset('public/testimonial/'.$list->image)}}" height="75px" width="75px">
                                               
                                             </td>
                                             <td>
                                                
                                                <a href="{{route('admin.delete.testimonial', $list->id)}}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                                                <a href="{{route('admin.edit.testimonial', $list->id)}}" onclick="return confirm('Are you sure to edit?');" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
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
                  