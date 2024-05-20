@extends('admin.layouts.app')
@section('header')
<title>Manage Apply Now | Admin Panel</title>
@include('admin.include.header')
@endsection
@section('sidebar')
@include('admin.include.sidebar')
@endsection


@section('content') 

<!--/app header-->                                    <!--Page header-->
<div class="page-header">
   <div class="page-leftheader">
      <h4 class="page-title mb-0">Hi! Welcome Back</h4>
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><i class="fe fe-home mr-2 fs-14"></i>Home</li>
         <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.dashboard')}}">admin Dashboard</a></li>
      </ol>
   </div>

</div>

<!-- ==================row end================================= -->                    
<!-- ===========================table============================================== -->
<div class="card">
   <div class="card-header">
      <div class="card-title">Apply Now List</div>
   </div>
   <div class="card-body">
      <div class="">
         <div class="table-responsive">
            <table id="example1" class="table table-bordered text-nowrap key-buttons">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Phone</th>
                     <th>Courses</th>
                     <th>Created At</th>
                  </tr>
               </thead>
               <tbody>
                  @if(isset($apply_now))
                  @foreach($apply_now as $list)
                  <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>{{ $list->name }}</td>
                     <td>{{ $list->email }}</td>
                     <td>{{ $list->phone }}</td>
                     <td>{{ $list->courses }}</td>
                     <td>{{ $list->created_at }}</td>
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
