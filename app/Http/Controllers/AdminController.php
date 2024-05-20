<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

use Validator;
use Session;
use Hash;
use App\Admin;
use App\Course;
use App\ContactUs;
use App\ApplyNow;
use App\Gallery;
use App\Affilition;
use App\CollegeWiseCourse;
use App\GalleryTab;
use App\Testimonial;
use App\Department;
use App\Teacher;
use App\Desk;
use App\Notices;
use App\Career;
use App\Seo;
use App\Blog;
use App\VideoGallery;
use App\AdminCareer;
use App\Settings;
use App\Placement;
use App\Homepage;
use App\College;
use App\Tender;
use File;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin/dashboard');
    }

    public function homepage_setting()
    {
        $homepage = Homepage::where('id', 1)->first();
        return view('admin/homepage_setting', compact('homepage'));
    }

    public function course()
    {
        $course = Course::get();
        $Department = Department::get();
        return view('admin.course', compact('course', 'Department'));
    }

    public function add_course(Request $request)
    {
        $data = $request->all();
        if ($files = $request->file('course_photo')) {
            // Define upload path
            $destinationPath = public_path('/website/course'); // upload path
            // Upload Orginal Image
            $profileImage1 = date('YmdHis') . "1." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage1);

            $data['course_photo'] = "$profileImage1";
        }

        $course = new Course();
        $course->create($data);
        session()->flash('success', 'Course Added Successfully!');
        return redirect()->back();
    }

    public function delete_course(Request $req, $id)
    {
        Course::destroy($id);
        $req->session()->flash('success', 'Deleted Successfully!');
        return back();
    }
    public function edit_course($id)
    {
        $Department = Department::all();
        $edit = Course::find($id);
        return view('admin.course_edit', compact('Department', 'edit', 'id'));
    }

    public function update_course(Request $request)

    {
        $course_details = Course::where('id', $request->id)->first();
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = rand() . '.' . $file->getClientOriginalExtension();
            $file->move("public/website/images/course/", $filename);
            $image = $filename;
        } else {
            $image = $course_details->image;
        }
        if ($request->hasfile('cover_image')) {
            $filee = $request->file('cover_image');
            $filenamee = rand() . '.' . $filee->getClientOriginalExtension();
            $filee->move("public/website/images/course/", $filenamee);
            $data->cover_image = $filename;
        }

        $update = Course::where('id', $request->id)->update(array('course_name' => $request->course_name, 'department_id' => $request->department_id, 'image' => $image, 'course_type' => $request->course_type, 'listing_order' => $request->listing_order, 'slug' => $request->slug, 'meta_description' => $request->meta_description, 'meta_tag' => $request->meta_tag, 'description' => $request->description, 'short_description' => $request->short_description,));

        session()->flash('success', 'Course Updated Successfully!');
        return back();
    }

    //update banner status

    public function course_status(Request $req, $id)

    {
        //get post status with the help of post id

        $data = DB::table('course')->select('status')->where('id', '=', $id)->first();

        //check post status

        if ($data->status == '1') {
            $status = '0';
        } else {
            $status = '1';
        }

        //update post status

        $data = array('status' => $status);
        DB::table('course')->where('id', $id)->update($data);

        return back();
    }

    public function contact_us()
    {
        $contact = ContactUs::all();
        return view('admin.contact-us', compact('contact'));
    }

    public function apply_now()
    {
        $apply_now = ApplyNow::all();
        return view('admin.apply-now', compact('apply_now'));
    }

    //display gallery
    public function gallery()
    {
        $gallery = Gallery::all();
        return view('admin.gallery', compact('gallery'));
    }

    //add gallery
    public function add_gallery(Request $req)
    {
        $req->validate([
            'image' => 'required|mimes:png,jpeg,jpg',
        ]);

        $gallery = new Gallery();

        if ($req->hasfile('image')) {
            $file = $req->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move("public/website/images/gallery/", $filename);
            $gallery->image = $filename;
        }

        $gallery->title = $req->title;
        $gallery->tab_name = $req->tab_name;
        $gallery->status = 1;
        $gallery->created_at = date('Y-m-d H:i:s');
        $gallery->updated_at = date('Y-m-d H:i:s');

        if ($gallery->save()) {
            $req->session()->flash('success', 'Added Successfully!');
            return redirect('admin/gallery');
        } else {
            return back()->withErrors(['danger' => 'Unable to added, Try Again Later.']);
        }
    }

    //edit gallery

    public function edit_gallery($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.edit-gallery', compact('gallery'));
    }

    //update gallery

    public function update_gallery(Request $req)
    {

        $gallery = Gallery::find($req->id);
        $gallery->title = $req->title;
        $gallery->tab_name = $req->tab_name;
        $gallery->status = 1;
        $gallery->created_at = date('Y-m-d H:i:s');
        $gallery->updated_at = date('Y-m-d H:i:s');

        if ($req->hasfile('image')) {
            $get_data = DB::table('galleries')->where('id', $req->id)->first();
            $destination = 'public/website/images/gallery/' . $get_data->image;
            //   dd($get_data);
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $image = $req->file('image');
            $ext = $image->getClientOriginalExtension();
            $file = time() . '.' . $ext;
            $image->move('public/website/images/gallery/', $file);
            $gallery->image = $file;
        }

        if ($gallery->save()) {
            $req->session()->flash('success', 'Updated Successfully!');
            return redirect('admin/gallery');
        } else {
            return back()->withErrors(['danger' => 'Unable to updated, Try Again Later.']);
        }
    }

    //delete gallery

    public function delete_gallery(Request $req, $id)
    {
        Gallery::destroy($id);
        $req->session()->flash('success', 'Deleted Successfully!');
        return redirect('admin/gallery');
    }

    //update gallery

    public function gallery_status_update(Request $req, $id)

    {
        //get post status with the help of post id

        $data = DB::table('galleries')->select('status')->where('id', '=', $id)->first();

        //check post status

        if ($data->status == '1') {
            $status = '0';
        } else {
            $status = '1';
        }

        //update post status

        $data = array('status' => $status);
        DB::table('galleries')->where('id', $id)->update($data);
        $req->session()->flash('success', 'Status has been updated successfully!');
        return redirect('admin/gallery');
    }

    //display gallery tab
    public function gallery_tab()
    {
        $gallery_tab = GalleryTab::all();
        return view('admin.gallery-tab', compact('gallery_tab'));
    }

    //add gallery tab
    public function add_gallery_tab(Request $req)
    {

        $gallery_tab = new GalleryTab();

        $gallery_tab->tab_name = $req->tab_name;
        $gallery_tab->status = 1;
        $gallery_tab->created_at = date('Y-m-d H:i:s');
        $gallery_tab->updated_at = date('Y-m-d H:i:s');

        if ($gallery_tab->save()) {
            $req->session()->flash('success', 'Added Successfully!');
            return redirect('admin/gallery-tab');
        } else {
            return back()->withErrors(['danger' => 'Unable to added, Try Again Later.']);
        }
    }

    //edit gallery tab

    public function edit_gallery_tab($id)
    {
        $gallery_tab = GalleryTab::find($id);
        return view('admin.edit-gallery-tab', compact('gallery_tab'));
    }

    //update gallery tab

    public function update_gallery_tab(Request $req)
    {

        $gallery_tab = GalleryTab::find($req->id);
        $gallery_tab->tab_name = $req->tab_name;
        $gallery_tab->status = 1;
        $gallery_tab->created_at = date('Y-m-d H:i:s');
        $gallery_tab->updated_at = date('Y-m-d H:i:s');

        if ($gallery_tab->save()) {
            $req->session()->flash('success', 'Updated Successfully!');
            return redirect('admin/gallery-tab');
        } else {
            return back()->withErrors(['danger' => 'Unable to updated, Try Again Later.']);
        }
    }

    //delete gallery tab

    public function delete_gallery_tab(Request $req, $id)
    {
        GalleryTab::destroy($id);
        $req->session()->flash('success', 'Deleted Successfully!');
        return redirect('admin/gallery-tab');
    }

    //update gallery tab

    public function gallery_tab_status_update(Request $req, $id)

    {
        //get post status with the help of post id

        $data = DB::table('gallery_tabs')->select('status')->where('id', '=', $id)->first();

        //check post status

        if ($data->status == '1') {
            $status = '0';
        } else {
            $status = '1';
        }

        //update post status

        $data = array('status' => $status);
        DB::table('gallery_tabs')->where('id', $id)->update($data);
        $req->session()->flash('success', 'Status has been updated successfully!');
        return redirect('admin/gallery-tab');
    }
    public function recognition_affilition()
    {
        return view('admin.recognition-affilition');
    }
    public function submit_recognition_affilition(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',

            ],
            [
                'title.required' => 'Title Required',


            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->all();
        $data['status'] = 'actived';
        if ($files = $request->file('file')) {
            // Define upload path
            $destinationPath = public_path('/Affilition/'); // upload path
            // Upload Orginal Image
            $profileImage1 = date('YmdHis') . "1." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage1);

            $data['file'] = "$profileImage1";
        }
        $Affilition = new Affilition();
        $Affilition->create($data);
        Session::flash('success', 'File Successfully Added.');
        return redirect()->back();
    }
    public function teacher()
    {
        $faculty = Teacher::all();
        return view('admin.teacher', compact('faculty'));
    }
    public function submit_teacher(Request $request)
    {

        $data = $request->all();
        if ($files = $request->file('image')) {
            // Define upload path
            $destinationPath = public_path('/faculty/'); // upload path
            // Upload Orginal Image
            $profileImage1 = date('YmdHis') . "1." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage1);

            $data['image'] = "$profileImage1";
        }
        $Teacher = new Teacher();
        $Teacher->create($data);
        Session::flash('success', 'Teacher Successfully Added.');
        return redirect()->back();
    }
    public function testimonial()
    {
        $testimonial_list = Testimonial::get();
        return view('admin.testimonial', compact('testimonial_list'));
    }
    public function add_testimonial(Request $request)
    {
        $data = $request->all();
        if ($files = $request->file('image')) {
            // Define upload path
            $destinationPath = public_path('/testimonial/'); // upload path
            // Upload Orginal Image
            $profileImage1 = date('YmdHis') . "1." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage1);

            $data['image'] = "$profileImage1";
        }
        $Testimonial = new Testimonial();
        $Testimonial->create($data);
        Session::flash('success', 'Testimonial Successfully Added.');
        return redirect()->back();
    }


    public function desk()
    {
        $page = Desk::get();

        return view('admin.desk', compact('page'));
    }
    public function edit_desk($id)
    {
        $page = Desk::where('id', $id)->first();

        return view('admin.edit-page', compact('page'));
    }
    public function add_desk(Request $request)
    {
        $data = $request->all();
        if ($files = $request->file('image')) {
            // Define upload path
            $destinationPath = public_path('/thumbnail/'); // upload path
            // Upload Orginal Image
            $profileImage1 = date('YmdHis') . "1." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage1);

            $data['image'] = "$profileImage1";
        }
        $Desk = new Desk();
        $Desk->create($data);
        Session::flash('success', 'Desk Successfully Added.');
        return redirect()->back();
    }

    public function notice_event()
    {
        $notice = Notices::all();
        return view('admin.notice', compact('notice'));
    }

    public function notice_insert(Request $request)
    {
        $data = $request->all();
        if ($files = $request->file('image')) {
            // Define upload path
            $destinationPath = public_path('/notice/'); // upload path
            // Upload Orginal Image
            $profileImage1 = date('YmdHis') . "1." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage1);

            $data['image'] = "$profileImage1";
        }

        $notice = new Notices();
        $notice->create($data);

        return redirect()->back();
    }

    public function notice_delete($id)
    {
        $del = Notices::find($id)->delete();
        session()->flash('success', 'Deleted Successfully');
        return redirect()->back();
    }



    public function tender()
    {
        $tender = Tender::all();
        return view('admin.tender', compact('tender'));
    }

    public function tender_insert(Request $request)
    {
        $data = $request->all();
        if ($files = $request->file('image')) {
            // Define upload path
            $destinationPath = public_path('/tender/'); // upload path
            // Upload Orginal Image
            $profileImage1 = date('YmdHis') . "1." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage1);

            $data['image'] = "$profileImage1";
        }

        $tender = new Tender();
        $tender->create($data);

        return redirect()->back();
    }

    public function tender_delete($id)
    {
        $del = Tender::find($id)->delete();
        session()->flash('success', 'Deleted Successfully');
        return redirect()->back();
    }


    public function update_page(Request $request)
    {
        $course_details = Desk::where('id', $request->id)->first();
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = rand() . '.' . $file->getClientOriginalExtension();
            $file->move("public/website/images/course/", $filename);
            $image = $filename;
        } else {
            $image = $course_details->image;
        }


        $update = Desk::where('id', $request->id)->update(array('title' => $request->title, 'name' => $request->name, 'image' => $image, 'slug' => $request->slug, 'description' => $request->description, 'seo_title' => $request->seo_title, 'seo_description' => $request->seo_description));

        session()->flash('success', 'Page Updated Successfully!');
        return back();
    }
    public function seo_settings()
    {
        $seo = Seo::where('id', 1)->first();
        return view('admin.seo-settings', compact('seo'));
    }
    public function seo_settings_update(Request $request)
    {
        $update = Seo::where('id', 1)->update(array('google_analitics' => $request->google_analitics, 'google_search_console' => $request->google_search_console));

        session()->flash('success', 'Updated Successfully!');
        return back();
    }

    public function blog()
    {
        $blog_list = Blog::get();
        return view('admin.blog', compact('blog_list'));
    }
    public function post_blog(Request $request)
    {
        $data = $request->all();
        if ($files = $request->file('image')) {
            // Define upload path
            $destinationPath = public_path('/blog/'); // upload path
            // Upload Orginal Image
            $profileImage1 = date('YmdHis') . "1." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage1);

            $data['image'] = "$profileImage1";
        }

        $Blog = new Blog();
        $Blog->create($data);
        session()->flash('success', 'Blog Added Successfully!');
        return redirect()->back();
    }
    public function delete_blog($id)
    {
        $delete_blog = Blog::where('id', $id)->delete();
        session()->flash('success', 'Blog Deleted Successfully!');
        return redirect()->back();
    }
    public function edit_blog($id)
    {
        $blog_details = Blog::where('id', $id)->first();
        return view('admin.edit-blog', compact('blog_details'));
    }
    public function update_blog(Request $request)
    {
        $blog_details = Blog::where('id', $request->id)->first();
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = rand() . '.' . $file->getClientOriginalExtension();
            $file->move("public/blog", $filename);
            $image = $filename;
        } else {
            $image = $blog_details->image;
        }


        $update = Blog::where('id', $request->id)->update(array('title' => $request->title, 'image' => $request->image, 'image' => $image, 'short_description' => $request->short_description, 'meta_tag' => $request->meta_tag, 'meta_description' => $request->meta_description, 'description' => $request->description, 'slug' => $request->slug));

        session()->flash('success', 'Blog Updated Successfully!');
        return back();
    }
    public function video_gallery()
    {
        $videogallery_list = DB::Table('videogallery')->get();
        //dd($gallery_list);
        return view('admin/video-gallery', compact('videogallery_list'));
    }
    public function add_video_gallery(Request $request)
    {
        $data = $request->all();

        $VideoGallery = new VideoGallery();
        $VideoGallery->create($data);
        session()->flash('success', 'Video Gallery Added Successfully!');
        return redirect()->back();
    }
    public function delete_video_gallery($id)
    {
        $delete_video_gallery = VideoGallery::where('id', $id)->delete();
        session()->flash('success', 'Galley Deleted Successfully');
        return redirect()->back();
    }
    public function delete_testimonial($id)
    {
        $detele = Testimonial::where('id', $id)->delete();
        session()->flash('success', 'Testimonial Deleted Successfully!');
        return redirect()->back();
    }
    public function edit_testimonial($id)
    {
        $testimonial_details = Testimonial::where('id', $id)->first();
        return view('admin.edit-testimonial', compact('testimonial_details'));
    }
    public function update_testimonial(Request $request)
    {
        $blog_details = Testimonial::where('id', $request->id)->first();
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = rand() . '.' . $file->getClientOriginalExtension();
            $file->move("public/testimonial/", $filename);
            $image = $filename;
        } else {
            $image = $blog_details->image;
        }


        $update = Testimonial::where('id', $request->id)->update(array('student_name' => $request->student_name, 'image' => $image, 'testimonial' => $request->testimonial));

        session()->flash('success', 'Testimoanl Updated Successfully!');
        return back();
    }
    public function department_delete($id)
    {
        $delete_college = Department::where('id', $id)->delete();
        session()->flash('success', 'College Deleted Successfully!');
        return back();
    }
    public function department_edit($id)
    {
        $college_details = Department::where('id', $id)->first();
        return view('admin.department-edit', compact('college_details'));
    }
    public function department_update(Request $request)
    {
        $blog_details = Department::where('id', $request->college_id)->first();
        if ($request->hasfile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = rand() . '.' . $file->getClientOriginalExtension();
            $file->move("public/thumbnail/", $filename);
            $thumbnail = $filename;
        } else {
            $thumbnail = $blog_details->thumbnail;
        }


        $update = Department::where('id', $request->college_id)->update(array('department_name' => $request->department_name, 'thumbnail' => $thumbnail, 'collegewebsite' => $request->collegewebsite, 'college_estd_in' => $request->college_estd_in, 'location' => $request->location, 'contact_number' => $request->contact_number, 'slug' => $request->slug, 'seo_title' => $request->seo_title, 'seo_description' => $request->seo_description, 'description' => $request->description));

        session()->flash('success', 'College Updated Successfully!');
        return back();
    }
    public function delete_course_college($id)
    {
        $CollegeWiseCourse = CollegeWiseCourse::where('id', $id)->delete();
        session()->flash('success', ' Course Deleted Successfully!');
        return back();
    }
    public function update_course_college(Request $request)
    {
        //dd($request->course_college);
        $update = CollegeWiseCourse::where('id', $request->course_college)->update(array('total_fees' => $request->total_fees, 'no_of_seates' => $request->no_of_seates, 'eligibility' => $request->eligibility, 'duration' => $request->duration, 'age_limit' => $request->age_limit,));

        session()->flash('success', 'Course Updated Successfully!');
        return back();
    }
    public function add_course_inCollege(Request $request)
    {
        $data = $request->all();
        $data['college'] = $request->college;

        $CollegeWiseCourse = new CollegeWiseCourse();
        $CollegeWiseCourse->create($data);
        session()->flash('success', 'Course Added Successfully!');
        return redirect()->back();
    }
    public function placement()
    {
        $placement = Placement::all();
        return view('admin.placement', compact('placement'));
    }

    public function placement_insert(Request $request)
    {
        $data = $request->all();
        if ($files = $request->file('image')) {
            $destinationPath = public_path('/website/images/placement/');
            $image = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $image);
            $data['image'] = "$image";
        }
        $placement = new Placement;
        $placement->create($data);

        $placement = Placement::all();
        session()->flash('success', 'Placement Added Successfully!');
        return redirect()->back();
    }

    public function placement_edit($id)
    {
        $placement = DB::table('placements')->where('id', $id)->first();
        return view('admin.edit-placement', compact('placement'));
    }

    public function update_placement(Request $request)
    {

        $placement = Placement::where('id', $request->id)->first();
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = rand() . '.' . $file->getClientOriginalExtension();
            $file->move("public/website/images/placement/", $filename);
            $image = $filename;
        } else {
            $image = $placement->image;
        }

        $data = array('title' => $request->title, 'image' => $image);
        DB::table('placements')->where('id', $request->id)->update($data);
        session()->flash('success', 'Placement Updated Successfully!');
        return redirect()->route('admin.placement');
    }

    public function delete_placement($id)
    {
        Placement::where('id', $id)->delete();
        return redirect()->back();
    }
    public function settings()
    {
        $setting = Settings::where('id', 1)->first();
        return view('admin.settings', compact('setting'));
    }

    public function update_settings(Request $request)
    {

        $data = array('whatsapp' => $request->whatsapp, 'phone' => $request->phone, 'alternet_phone' => $request->alternet_phone, 'email' => $request->email, 'address' => $request->address, 'facebook' => $request->facebook, 'instagram' => $request->instagram, 'twitter' => $request->twitter, 'linkedin' => $request->linkedin, 'youtube' => $request->youtube);
        DB::table('settings')->where('id', 1)->update($data);
        session()->flash('success', 'Updated Successfully!');
        return redirect()->back()->with('msg', 'Updated');
        //  $update=Settings::where('id','1')->update(array('whatsapp'=>$request->whatsapp,'phone'=>$request->phone,'alternet_phone'=>$request->alternet_phone,'address'=>$request->address,'facebook'=>$request->facebook,'instagram'=>$request->instagram,'twitter'=>$request->twitter,'linkedin'=>$request->linkedin));
    }
    public function update_homepage_setting(Request $request)
    {
        $homepage = Homepage::where('id', 1)->first();

        if ($request->hasfile('slider_1')) {
            $file = $request->file('slider_1');
            $filename = rand() . '.' . $file->getClientOriginalExtension();
            $file->move("public/slider/", $filename);
            $slider_1 = $filename;
        } else {
            $slider_1 = $homepage->slider_1;
        }
        if ($request->hasfile('slider_2')) {
            $file = $request->file('slider_2');
            $filename = rand() . '.' . $file->getClientOriginalExtension();
            $file->move("public/slider/", $filename);
            $slider_2 = $filename;
        } else {
            $slider_2 = $homepage->slider_2;
        }
        if ($request->hasfile('slider_3')) {
            $file = $request->file('slider_3');
            $filename = rand() . '.' . $file->getClientOriginalExtension();
            $file->move("public/slider/", $filename);
            $slider_3 = $filename;
        } else {
            $slider_3 = $homepage->slider_3;
        }
        if ($request->hasfile('about_first_image')) {
            $file = $request->file('about_first_image');
            $filename = rand() . '.' . $file->getClientOriginalExtension();
            $file->move("public/slider/", $filename);
            $about_first_image = $filename;
        } else {
            $about_first_image = $homepage->about_first_image;
        }
        if ($request->hasfile('about_second_image')) {
            $file = $request->file('about_second_image');
            $filename = rand() . '.' . $file->getClientOriginalExtension();
            $file->move("public/slider/", $filename);
            $about_second_image = $filename;
        } else {
            $about_second_image = $homepage->about_second_image;
        }


        $update = Homepage::where('id', 1)->update(array(
            'box1_title' => $request->box1_title, 'box1_content' => $request->box1_content, 'box1_link' => $request->box1_link,
            'box2_title' => $request->box2_title, 'box2_content' => $request->box2_content, 'box2_link' => $request->box2_link,
            'box3_title' => $request->box3_title, 'box3_content' => $request->box3_content, 'box3_link' => $request->box3_link,
            'box3_title' => $request->box3_title, 'box3_content' => $request->box3_content, 'box3_link' => $request->box3_link,
            'box4_title' => $request->box4_title, 'box4_content' => $request->box4_content, 'box4_link' => $request->box4_link,
            'about_section_title' => $request->about_section_title, 'about_section_sub_title' => $request->about_section_sub_title,
            'about_section_content' => $request->about_section_content, 'point1' => $request->point1, 'point2' => $request->point2, 'point3' => $request->point3, 'college_count' => $request->college_count,
            'slider_1' => $slider_1, 'slider_2' => $slider_2, 'slider_3' => $slider_3, 'about_first_image' => $about_first_image, 'about_second_image' => $about_second_image,
        ));

        session()->flash('success', 'College Updated Successfully!');
        return back();
    }
    public function career()
    {
        $AdminCareer = AdminCareer::get();
        return view('admin.career', compact('AdminCareer'));
    }
    /*----------------------------------------*/
    public function adddelete_career($id)
    {
        $AdminCareer = AdminCareer::where('id', $id)->delete();
        session()->flash('success', 'Career Deleted Successfully');
        return redirect()->back();
    }
    public function edit_career($id)
    {
        $AdminCareer = AdminCareer::where('id', $id)->first();
        return view('admin.edit-career', compact('AdminCareer'));
    }
    public function update_career(Request $request)
    {
        $update = AdminCareer::where('id', $request->id)->update(array('title' => $request->title, 'description' => $request->description));

        session()->flash('success', 'Career Updated Successfully!');
        return back();
    }
    /*----------------------------------------*/
    public function add_career(Request $request)
    {
        $data = $request->all();

        $AdminCareer = new AdminCareer();
        $AdminCareer->create($data);
        session()->flash('success', 'Career Post Added Successfully!');
        return redirect()->back();
    }
    public function career_application()
    {
        $Career = Career::get();
        return view('admin.career-application', compact('Career'));
    }

    public function college()
    {
        $college = College::all();
        return view('admin.college', compact('college'));
    }

    public function college_insert(Request $request)
    {
        $data = $request->all();
        if ($files = $request->file('cover_photo')) {
            $destinationPath = public_path('/website/colleges/');
            $cover_photo = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $cover_photo);
            $data['cover_photo'] = "$cover_photo";
        }
        $college = new College;
        $college->create($data);

        $college = College::all();
        session()->flash('success', 'College Added Successfully!');
        return redirect()->back();
    }
    public function department()
    {
        $departmet_list = Department::get();
        return view('admin.department', compact('departmet_list'));
    }
    public function department_insert(Request $request)
    {
        $data = $request->all();
        $department = new Department();
        $department->create($data);
        session()->flash('success', 'Department Added Successfully!');
        return redirect()->back();
    }
}
