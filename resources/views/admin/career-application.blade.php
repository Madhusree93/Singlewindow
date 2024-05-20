@extends('admin.layouts.app')
@section('header')
<title>Manage Career Application | Admin Panel</title>
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
      <div class="card-title">Contact List</div>
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
                     <th>Address</th>
                     <th>Applied For</th>
                     <th>CV</th>
                     <th>applied At</th>
                  </tr>
               </thead>
               <tbody>
                  @if(isset($Career))
                  @foreach($Career as $list)
                  <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>{{ $list->name }}</td>
                     <td>{{ $list->email }}</td>
                     <td>{{ $list->phone }}</td>
                     <td>{{ $list->address }}</td>
                     <td>{{ $list->applied_for }}</td>
                     <td><a href="{{asset('public/cv')}}/{{@$list->cv}}" download="" class="btn btn-primary"><i class="glyphicon glyphicon-download"></i></a></td>
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
