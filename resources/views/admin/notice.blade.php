@extends('admin.layouts.app')
@section('header')
    <title>
        Manage Gallery | Admin Panel</title>
    @include('admin.include.header')
@endsection
@section('sidebar')
    @include('admin.include.sidebar')
@endsection
@section('content')
    <!--/app header--> <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">

        </div>
        <div class="page-rightheader">

        </div>

    </div>

    <!-- Row-1 -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Notice & Upcoming Events</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.notice_insert') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label"> Title <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="title" placeholder="Title">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Slug <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="slug" placeholder="Slug">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label"> File/Image</label>

                                    <input type="file" class="form-control" name="image" placeholder="File">

                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-label"> Post Type <span class="text-red">*</span></label>
                                    <select class="form-control select2 select2-hidden-accessible" name="post_type">
                                        <option value="Notice">Notice</option>
                                        <option value="Event">Event</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-label"> Date <span class="text-red">*</span></label>
                                    <input type="date" class="form-control" name="date">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Description <span class="text-red">*</span></label>
                                    <textarea id="editor" name="description" class="form-control"></textarea>
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
            <div class="card-title">Notice & Events</div>
        </div>
        <div class="card-body">
            <div class="">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered text-nowrap key-buttons">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>

                                <th>Thumbnail</th>
                                <!--<th>Description</th>-->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notice as $notice)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $notice->title }}</td>

                                    <td>
                                        @if (isset($notice->image))
                                            <img src="{{ asset('public/notice/' . $notice->image) }}" alt=""
                                                width="75px" height="75px">
                                        @endif
                                    </td>
                                    <!--<td>{!! $notice->description !!}</td>-->
                                    <td><a href="{{ route('admin.notice_delete', $notice->id) }}"
                                            onclick="return confirm('Are you sure to delete?');" class="btn btn-danger"><i
                                                class="glyphicon glyphicon-trash"></i></a></td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================================table===   ======================================== -->



    </div>
    </div>

    </div>
@endsection
@section('footer')
    @include('admin.include.footer')
@endsection