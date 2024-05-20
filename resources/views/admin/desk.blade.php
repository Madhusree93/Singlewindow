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
  <!--  <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12">
         <div class="card">
            <div class="card-header">
            <h3 class="card-title">Add Page</h3>
         </div>
      
         <div class="card-body">
            <form action="{{route('admin.add.desk')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="row">

                      <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Title">
                     </div>
                  </div>

                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Name">
                     </div>
                  </div>
                   
                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Slug</label>
                        <input type="text" class="form-control" name="slug" value="{{old('slug')}}" placeholder="Slug">
                     </div>
                  </div>

                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" value="{{old('image')}}" placeholder="Image">
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
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" value="{{old('description')}}" placeholder="Description">
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">SEO Title</label>
                        <input type="text" class="form-control" name="seo_title" value="{{old('seo_title')}}" placeholder="SEO Title">
                     </div>
                  </div>

                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">SEO Decription</label>
                        <input type="text" class="form-control" name="seo_description" value="{{old('seo_description')}}" placeholder="SEO Decription">
                     </div>
                  </div>

                  <div class="col-sm-12 col-md-6">
                     <div class="form-group">
                        <label class="form-label">Canonical Tag</label>
                        <input type="text" class="form-control" name="canonical_tag" value="{{old('canonical_tag')}}" placeholder="Canonical Tag">
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
   </div> -->
   <div class="card">
                           <div class="card-header">
                              <div class="card-title">Pages</div>
                           </div>
                           <div class="card-body">
                              <div class="">
                                 <div class="table-responsive">
                                    <table id="example1" class="table table-bordered text-nowrap key-buttons">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Title</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @if(isset($page))
                                          @foreach($page as $key=>$list)
                                          <tr>
                                             <td>{{ (int)$key+1 }}</td>
                                             <td>{{ $list->title }}</td>
                                             <td>
                                                <a href="{{route('admin.edit.desk', $list->id)}}" onclick="return confirm('Are you sure to edit?');" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
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

</div>

<!-- ==================row end================================= -->

               </div>
            </div>
            
         </div>

            @endsection
@section('footer')
    @include('admin.include.footer')
@endsection
                  