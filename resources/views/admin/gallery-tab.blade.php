@extends('admin.layouts.app')
@section('header')
<title>Manage Gallery Tab | Admin Panel</title>
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

<!-- Row-1 -->
   <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12">
         <div class="card">
            <div class="card-header">
            <h3 class="card-title">Add Gallery Tab</h3>
         </div>
      
         <div class="card-body">
            <form action="{{route('admin.add.gallery-tab')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="row">
                  <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        <label class="form-label">Tab Name</label>
                        <input type="text" class="form-control" name="tab_name" value="{{old('tab_name')}}" placeholder="Tab Name">
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
                              <div class="card-title">Gallery Tab</div>
                           </div>
                           <div class="card-body">
                              <div class="">
                                 <div class="table-responsive">
                                    <table id="example1" class="table table-bordered text-nowrap key-buttons">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Tab Name</th>
                                             <th>Status</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @if(isset($gallery_tab))
                                          @foreach($gallery_tab as $key=>$list)
                                          <tr>
                                             <td>{{ (int)$key+1 }}</td>
                                             <td>{{ $list->tab_name }}</td>
                                             <td>@if($list->status == '1')
                                                <a href="{{route('admin.gallery-tab.status', $list->id)}}" class="btn btn-success btn-sm">Active</a>
                                                @else
                                                <a href="{{route('admin.gallery-tab.status', $list->id)}}" class="btn btn-danger btn-sm">Deactive</a>
                                             @endif
                                             </td>
                                             <td>
                                                <a href="{{route('admin.edit.gallery-tab', $list->id)}}" onclick="return confirm('Are you sure to edit?');" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i></a>
                                                <a href="{{route('admin.delete.gallery-tab', $list->id)}}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
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
                  