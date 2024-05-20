@extends('admin.layouts.app') @section('header') <title>Manage Blog | Admin Panel</title> @include('admin.include.header') @endsection @section('sidebar') @include('admin.include.sidebar') @endsection @section('content')
<!--/app header-->
<!--Page header-->
<div class="page-header">
  <div class="page-rightheader"> @include('notification') </div>
</div>
<!-- Row-1 -->
<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Update Settings</h3>
      </div>
      <div class="card-body">
        <form action="{{route('admin.add.settings')}}" method="post" enctype="multipart/form-data"> 
         @csrf 
         <div class="row">
            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                <label class="form-label">Whatsapp <font color="red">(*)</font></label>
                <input required="" type="text" class="form-control" name="whatsapp" value="{{@$setting->whatsapp}}" placeholder="Whatsapp">
              </div>
            </div>
            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                <label class="form-label">Phone <font color="red">(*)</font></label>
                <input required="" type="text" class="form-control" name="phone" value="{{@$setting->phone}}" placeholder="phone" required="Phone">
              </div>
            </div>
            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                <label class="form-label">Alternate Phone <font color="red">(*)</font></label>
                <input required="" type="text" class="form-control" name="alternet_phone" value="{{@$setting->alternet_phone}}" placeholder="Alternate Phone">
              </div>
            </div>

            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                <label class="form-label">Email <font color="red">(*)</font></label>
                <input required="" type="email" class="form-control" name="email" value="{{@$setting->email}}" placeholder="Email">
              </div>
            </div>
            <div class="col-sm-12 col-md-12">
              <div class="form-group">
                <label class="form-label">Address <font color="red">(*)</font></label>
                <input required="" type="text" class="form-control" name="address" value="{{@$setting->address}}" placeholder="Address">
              </div>
            </div>
            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                <label class="form-label">Facebook <font color="red">(*)</font></label>
                <input required="" type="text" class="form-control" name="facebook" value="{{@$setting->facebook}}" placeholder="Facebook">
              </div>
            </div>
            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                <label class="form-label">Instagram</label>
                <input required="" type="text" class="form-control" name="instagram" value="{{@$setting->instagram}}" placeholder="Instagram" >
              </div>
            </div>
            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                <label class="form-label">Twitter <font color="red">(*)</font></label>
                <input required="" type="text" class="form-control" name="twitter" value="{{@$setting->twitter}}" placeholder="Twitter">
              </div>
            </div>

            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                <label class="form-label">Linkedin <font color="red">(*)</font></label>
                <input required="" type="text" class="form-control" name="linkedin" value="{{@$setting->linkedin}}" placeholder="Linkedin" >
              </div>
            </div>

            <div class="col-sm-12 col-md-12">
              <div class="form-group">
                <label class="form-label">Youtube <font color="red">(*)</font></label>
                <input required="" type="text" class="form-control" name="youtube" value="{{@$setting->youtube}}" placeholder="Youtube">
              </div>
            </div>
            {{-- <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea id="editor" name="description"></textarea>
                     </div>
            </div> --}}
            <div class="form-group mb-0 mt-5 row justify-content-end">
              <div class="col-md-10">
                <button type="submit" class="btn btn-primary">Update</button>
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
{{-- <div class="card">
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
              <th>Title</th>
              <th>Photo</th>
              <th>Short Description</th>
              <th>Action</th>
            </tr>
          </thead> --}}
          {{-- <tbody> 
            @foreach($blog_list as $list)
            <tr>
               <td>{{$loop->iteration}}</td>
               <td>{{$list->title}}</td>
               <td><img src="{{asset('public/blog/'.$list->image)}}" width="75px" height="75px"></td>
               <td>{{$list->short_description}}</td>
               <td>
                  <a href="{{route('admin.delete.blog', $list->id)}}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                  <a href="{{route('admin.edit.blog', $list->id)}}" onclick="return confirm('Are you sure to edit?');" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
               </td>
            </tr>
            @endforeach
          </tbody> --}}
        {{-- </table>
      </div>
    </div>
  </div>
</div> --}}
<!-- ======================================table=========================================== -->
</div>
</div>
</div> @endsection @section('footer') @include('admin.include.footer') @endsection