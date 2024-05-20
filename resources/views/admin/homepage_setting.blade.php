@extends('admin.layouts.app')
@section('header')
<title>Manage Home Page | Admin Panel</title>
@include('admin.include.header')
@endsection
@section('sidebar')
@include('admin.include.sidebar')
@endsection
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
      <h3 class="card-title">Manage Your HomePage</h3>
   </div>

   <div class="card-body">
      <form action="{{route('admin.update.homepage')}}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="row">
             
                  <div class="col-sm-12 col-md-6">
               <div class="form-group">
                  <label class="form-label">Slider 1 <font color="red">(1200 X 600px)</font></label>
                  <input type="file" class="form-control" name="slider_1"  placeholder="Title">
                  <img src="{{asset('/public/slider/')}}/{{@$homepage->slider_1}}" width="150px" hight="75px">
               </div>
            </div>

                <div class="col-sm-12 col-md-6">
               <div class="form-group">
                  <label class="form-label"> Slider 2 <font color="red">(1200 x 600px) </font></label>
                  <input type="file" class="form-control" name="slider_2"  placeholder="Title">
                  <img src="{{asset('/public/slider/')}}/{{@$homepage->slider_2}}" width="150px" hight="75px">
               </div>
            </div>
             <!--<div class="col-sm-12 col-md-4">
               <div class="form-group">
                  <label class="form-label"> Slider 3 <font color="red">(1200px * 600px)</font></label>
                  <input type="file" class="form-control" name="slider_3"  placeholder="Title">
                  <img src="{{asset('/public/slider/')}}/{{@$homepage->slider_3}}" width="150px" hight="75px">
               </div>
            </div>-->
                <div class="col-sm-12 col-md-4">
               <div class="form-group">
                  <label class="form-label">Box-1 Title <font color="red">(*)</font></label>
                  <input type="text" class="form-control" name="box1_title"  placeholder="Title" value="{{@$homepage->box1_title}}">
               </div>
            </div>

                <div class="col-sm-12 col-md-4">
               <div class="form-group">
                  <label class="form-label"> Box-1 Content <font color="red">(*)</font></label>
                  <input type="text" class="form-control" name="box1_content"  placeholder="Content" value="{{@$homepage->box1_content}}" required="">
               </div>
            </div>
             <div class="col-sm-12 col-md-4">
               <div class="form-group">
                  <label class="form-label"> Box-1 Link <font color="red">(*)</font></label>
                  <input type="text" class="form-control" name="box1_link"  placeholder="Link" value="{{@$homepage->box1_link}}" required="">
               </div>
            </div>
            
              <div class="col-sm-12 col-md-4">
               <div class="form-group">
                  <label class="form-label">Box-2 Title <font color="red">(*)</font></label>
                  <input type="text" class="form-control" name="box2_title"  placeholder="Title" value="{{@$homepage->box2_title}}" required="">
               </div>
            </div>

                <div class="col-sm-12 col-md-4">
               <div class="form-group">
                  <label class="form-label"> Box-2 Content <font color="red">(*)</font></label>
                  <input type="text" class="form-control" name="box2_content"  placeholder="Content" value="{{@$homepage->box2_content}}" required="">
               </div>
            </div>
             <div class="col-sm-12 col-md-4">
               <div class="form-group">
                  <label class="form-label"> Box-2 Link <font color="red">(*)</font></label>
                  <input type="text" class="form-control" name="box2_link"  placeholder="Link" value="{{@$homepage->box2_link}}" required="">
               </div>
            </div>
            
               <div class="col-sm-12 col-md-4">
               <div class="form-group">
                  <label class="form-label">Box-3 Title <font color="red">(*)</font></label>
                  <input type="text" class="form-control" name="box3_title"  placeholder="Title" value="{{@$homepage->box3_title}}" required="">
               </div>
            </div>

                <div class="col-sm-12 col-md-4">
               <div class="form-group">
                  <label class="form-label"> Box-3 Content <font color="red">(*)</font></label>
                  <input type="text" class="form-control" name="box3_content"  placeholder="Content" value="{{@$homepage->box3_content}}" required="">
               </div>
            </div>
             <div class="col-sm-12 col-md-4">
               <div class="form-group">
                  <label class="form-label"> Box-3 Link <font color="red">(*)</font></label>
                  <input type="text" class="form-control" name="box3_link"  placeholder="Link" value="{{@$homepage->box3_link}}" required="">
               </div>
            </div>
            
                <div class="col-sm-12 col-md-4">
               <div class="form-group">
                  <label class="form-label">Box-4 Title <font color="red">(*)</font></label>
                  <input type="text" class="form-control" name="box4_title"  placeholder="Title" value="{{@$homepage->box4_title}}" required="">
               </div>
            </div>

                <div class="col-sm-12 col-md-4">
               <div class="form-group">
                  <label class="form-label"> Box-4 Content <font color="red">(*)</font></label>
                  <input type="text" class="form-control" name="box4_content"  placeholder="Content" value="{{@$homepage->box4_content}}" required="">
               </div>
            </div>
             <div class="col-sm-12 col-md-4">
               <div class="form-group">
                  <label class="form-label"> Box-4 Link <font color="red">(*)</font></label>
                  <input type="text" class="form-control" name="box4_link"  placeholder="Link" value="{{@$homepage->box4_link}}" required="">
               </div>
            </div>
             
            <div class="col-sm-12 col-md-6">
               <div class="form-group">
                  <label class="form-label">About Section Title <font color="red">(*)</font></label>
                  <input type="text" class="form-control" name="about_section_title"  placeholder="title" value="{{@$homepage->about_section_title}}" required="">
               </div>
            </div>
            <div class="col-sm-12 col-md-6">
               <div class="form-group">
                  <label class="form-label">About Section Sub Title <font color="red">(*)</font></label>
                  <input type="text" class="form-control" name="about_section_sub_title"  placeholder="Sub Title" value="{{@$homepage->about_section_sub_title}}" required="">
               </div>
            </div>
       <div class="col-sm-12 col-md-12">
               <div class="form-group">
                  <label class="form-label">About Section Content <span class="text-red">*</span></label>
                  <textarea id ="editor" name="about_section_content" class="form-control">{!!@$homepage->about_section_content!!}</textarea>
               </div>
            </div>

     <div class="col-sm-12 col-md-6">
               <div class="form-group">
                  <label class="form-label">About Section First Image<font color="red">(*)</font></label>
                  <input type="file" class="form-control" name="about_first_image"  placeholder="Title">
                  <img src="{{asset('/public/slider/')}}/{{@$homepage->about_first_image}}" width="75px" hight="75px">
               </div>
            </div>
             <div class="col-sm-12 col-md-6">
               <div class="form-group">
                  <label class="form-label"> About Section Second Image<font color="red">(*)</font></label>
                  <input type="file" class="form-control" name="about_second_image"  placeholder="Title">
                  <img src="{{asset('/public/slider/')}}/{{@$homepage->about_second_image}}" width="75px" hight="75px">
               </div>
            </div>
            
                <div class="col-sm-12 col-md-4">
               <div class="form-group">
                  <label class="form-label">About Section Point 1 <font color="red">(*)</font></label>
                  <input type="text" class="form-control" name="point1"  placeholder="Point 1" value="{{@$homepage->point1}}" required="">
               </div>
            </div>

                <div class="col-sm-12 col-md-4">
               <div class="form-group">
                  <label class="form-label">Point 2<font color="red">(*)</font></label>
                  <input type="text" class="form-control" name="point2"  placeholder="Point 2" value="{{@$homepage->point2}}" required="">
               </div>
            </div>
             <div class="col-sm-12 col-md-4">
               <div class="form-group">
                  <label class="form-label"> Point 3<font color="red">(*)</font></label>
                  <input type="text" class="form-control" name="point3"  placeholder="Point 3" value="{{@$homepage->point3}}" required="">
               </div>
            </div>
            

     <div class="col-sm-12 col-md-4">
               <div class="form-group">
                  <label class="form-label"> Number Of College<font color="red">(*)</font></label>
                  <input type="number" class="form-control" name="college_count" value="{{@$homepage->college_count}}" required="">
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

               <!-- ======================================table===   ======================================== -->

            

         </div>
      </div>
      
   </div>




@endsection
@section('footer')
    @include('admin.include.footer')
@endsection