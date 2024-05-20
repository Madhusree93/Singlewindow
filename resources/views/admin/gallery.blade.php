@extends('admin.layouts.app')
@section('header')
<title>Manage Gallery | Admin Panel</title>
@include('admin.include.header')
@endsection
@section('sidebar')
@include('admin.include.sidebar')
@endsection

<?php
$gallery_list = DB::table('gallery_tabs')->where('status','=',1)->get();

?>

@section('content') 
            
                  <!--/app header-->                                    <!--Page header-->
                  <div class="page-header">
                     <div class="page-leftheader">
                        
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
            <h3 class="card-title">Add Gallery</h3>
         </div>
      
         <div class="card-body">
            <form action="{{route('admin.add.gallery')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="row">
                   <div class="col-sm-12 col-md-4">
                     <div class="form-group">
                        <label class="form-label">Select Category <font color="red">*</font></label>
                        <select class="form-control" name="tab_name">
                          <option value="" disabled="">---Select---</option>
                          @if(isset($gallery_list))
                          @foreach($gallery_list as $list)
                           <option value="{{$list->id}}">{{$list->tab_name}}</option>
                          @endforeach
                          @endif
                        </select>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                     <div class="form-group">
                        <label class="form-label">Title <span class="text-red">*</span></label>
                        <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Title">
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                     <div class="form-group">
                        <label class="form-label">Image <span class="text-red">*</span></label>
                        <div class="custom-file">
                           <input type="file" name="image">
                           
                        </div>
                     </div>
                  </div>
                 {{--<div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description">{{old('description')}}</textarea>
                     </div>
                  </div>--}}
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
                              <div class="card-title">Gallery</div>
                           </div>
                           <div class="card-body">
                              <div class="">
                                 <div class="table-responsive">
                                    <table id="example1" class="table table-bordered text-nowrap key-buttons">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Title</th>
                                             <th>Image</th>
<!--                                              <th>Tab Name</th>
 -->                                             <th>Status</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @if(isset($gallery))
                                          @foreach($gallery as $key=>$list)
                                          <tr>
                                             <td>{{ (int)$key+1 }}</td>
                                             <td>{{ $list->title }}</td>
                                             <td>
                                                @if($list->image)
                                                <img src="{{asset('public/website/images/gallery/'.$list->image)}}" height="75px" width="75px">
                                                @else
                                                <img src="{{asset('public/website/images/no-image-available-icon-6.jpg')}}" height="75px" width="150px">
                                                @endif
                                             </td>
                                             {{--<td>{{$list->tab_name}}</td>--}}
                                             <td>@if($list->status == '1')
                                                <a href="{{route('admin.gallery.status', $list->id)}}" class="btn btn-success btn-sm">Active</a>
                                                @else
                                                <a href="{{route('admin.gallery.status', $list->id)}}" class="btn btn-danger btn-sm">Deactive</a>
                                             @endif
                                             </td>
                                             <td>
                                                <a href="{{route('admin.edit.gallery', $list->id)}}" onclick="return confirm('Are you sure to edit?');" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i></a>
                                                <a href="{{route('admin.delete.gallery', $list->id)}}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
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
                  