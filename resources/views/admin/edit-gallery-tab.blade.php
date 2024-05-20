@extends('admin.layouts.app')
@section('header')
<title>Edit Gallery Tab | Admin Panel</title>
@include('admin.include.header')
@endsection
@section('sidebar')
@include('admin.include.sidebar')
@endsection

@section('content')

<div class="page-header">
                     <div class="page-leftheader">
                        <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><i class="fe fe-home mr-2 fs-14"></i>Home</li>
                           <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.dashboard')}}">admin Dashboard</a></li>
                        </ol>
                     </div>                     
                  </div>
<!--End Page header-->

<!-- Row-1 -->
<div class="row">
   <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card">
         <div class="card-header">
            <h3 class="card-title">Edit Gallery Tab</h3>
         </div>
         
         <div class="card-body">
            <form action="{{route('admin.gallery-tab.update', $gallery_tab->id)}}" method="post" enctype="multipart/form-data">
               @csrf
               @method('PUT')
               <div class="row">
                  <div class="col-sm-12 col-md-4">
                     <div class="form-group">
                        <label class="form-label">Tab Name</label>
                        <input type="text" class="form-control" name="tab_name" value="{{$gallery_tab->tab_name}}" placeholder="Tab Name">
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