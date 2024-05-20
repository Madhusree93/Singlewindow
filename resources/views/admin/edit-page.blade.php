@extends('admin.layouts.app')
@section('header')
<title>Manage Desk | Admin Panel</title>
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
            <h3 class="card-title">Edit Page</h3>
         </div>
      
         <div class="card-body">
            <form action="{{route('admin.update.desk')}}" method="post" enctype="multipart/form-data">
               @csrf
               <input type="hidden" name="id" value="{{@$page->id}}">
               <div class="row">

                      <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Page Name <font color="red">(*)</font></label>
                        <input type="text" class="form-control" name="title"  value="{{@$page->title}}" placeholder="Title">
                     </div>
                  </div>

                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Sub Title <font color="red">(*)</font></label>
                        <input type="text" class="form-control" name="name"  value="{{@$page->name}}" placeholder="Name">
                     </div>
                  </div>
                   
                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Slug <font color="red">(*)</font></label>
                        <input type="text" class="form-control" name="slug"  value="{{@$page->slug}}" placeholder="Slug">
                     </div>
                  </div>

                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Image <font color="red">(800x550)</font></label>
                        <input type="file" class="form-control" name="image" value="{{old('image')}}"  placeholder="Image">
                     </div>
                     @if(isset($page->image))<img src="{{asset('public/')}}/website/images/course/{{@$page->image}}" height="100px" width="100px">@endif
                  </div>
                  <!-- <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Designation</label>
                        <input type="text" class="form-control" name="designation" value="{{old('designation')}}" placeholder="Designation">
                     </div>
                  </div> -->
                  <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        <label class="form-label">Description <font color="red">(*)</font></label>
                        <textarea id="editor"  name="description">{{@$page->description}}</textarea>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Meta Tag</label>
                        <input type="text" class="form-control" name="seo_title"  value="{{@$page->seo_title}}" placeholder="Meta Tag">
                     </div>
                  </div>

                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Meta description</label>
                        <input type="text" class="form-control" name="seo_description" value="{{@$page->seo_description}}"  placeholder="Meta description">
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
                  