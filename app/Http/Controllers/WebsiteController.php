<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Gallery;
use App\GalleryTab;
use App\ContactUs;
use App\Settings;
use App\ApplyNow;
use App\Teacher;
use App\Testimonial;
use App\Department;
use App\Desk;
use App\Notices;
use App\Affilition;
use App\VideoGallery;
use App\Placement;
use App\Blog;
use App\Career;
use App\Homepage;
use App\AdminCareer;
use App\College;
use App\Admission;
use App\Tender;
use Mail;
use DB;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;

class WebsiteController extends Controller
{
    public function index()
    {
        $teacher = Teacher::get();
        $Testimonial = Testimonial::get();
        $course = Course::inRandomOrder()->limit(6)->get();
        $blog = Blog::take('3')->get();
        $Homepages = Homepage::where('id', 1)->first();
        $college = College::inRandomOrder()->limit(8)->get();
        return view('website.index', compact('teacher', 'Testimonial', 'Homepages', 'course', 'blog', 'college'));
    }
    public function about()
    {
        return view('website.about');
    }

    public function companies()
    {

        // $college = College::all();
        return view('website.our-companies');
    }

    public function company_details($slug)
    {
        // $college_details = College::where('slug', $slug)->first();
        // $course_list = Course::where('college_id', $college_details->id)->get();
        return view('website.college_details');
    }

    public function blog()
    {
        $blog = Blog::get();
        return view('website.blog',compact('blog'));
    }

    public function blog_detail($id)
    { 
        $list = Blog::where('id', $id)->first();
        
      
        return view('website.blog_details',compact('list'));
    }

    public function gallery()
    {
        $gallery= Gallery::get();
        $gallery_category = GalleryTab::get();
        return view('website.gallery',compact('gallery', 'gallery_category'));
    }

    public function contact_us()
    {
        $contact_us= Settings::first();
        return view('website.contact',compact('contact_us'));
    }



    public function course()
    {
        $course = Course::get();
        return view('website.course', compact('course'));
    }

    public function course_details($slug)
    {

        $course_details = Course::where('slug', $slug)->first();
        return view('website.course_details', compact('course_details'));
    }

    public function academics()
    {
        return view('website.academics');
    }

    public function admission()
    {
        return view('website.admission');
    }


    public function admission_insert(Request $request)
    {
        $data = $request->all();
        $admission = new Admission();
        $admission->create($data);

        return redirect()->route('thank_you');
    }

    public function coursefetch(Request $request)
    {
        //dd('ok');
        //dd($request->idCategory);
        $data['course'] = DB::Table('course')->where("college_id", $request->idCategory)->OrderBy('course_name', 'ASC')->get(["course_name", "id"]);
        //dd($data['course']);


        return response()->json($data);
    }


    public function contact_us_insert(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
            'subject'=> 'required',
            'message' => 'required'
        ]);
       $contact = new ContactUs();
       $contact->name = $request->username;
       $contact->email = $request->email;
       $contact->phone = $request->phone;
       $contact->subject = $request->subject;
       $contact->message = $request->message;
       $contact->save();
       $ContactStatus = $contact->save();
           
        Mail::send('website.user_mail',['data'=> $contact, ], function($message) use ($request) {
        $message->from('noreply.khwahish@gmail.com', 'Single Window');
        $message->to( $request->email);
        $message->cc('madhusree.dits@gmail.com');
        $message->subject('Thank You for Enquery');
        }); 

        if($ContactStatus)
            return redirect()->back()->with('success','successfully submitted');
        else{
            return redirect()->back()->with('error','Error occured');
        }
        
    }

    public function chairman_desk()
    {
        return view('website.chairman_desk');
    }

    public function ignou_study_centre()
    {
        return view('website.ignou_study_centre');
    }

    public function career()
    {
        return view('website.career');
    }

    public function campus_tour()
    {
        return view('website.campus_tour');
    }

    public function mgno_social_welfare()
    {
        return view('website.mgno_social_welfare');
    }

    public function tender()
    {
        $tender = Tender::get();
        return view('website.tender', compact('tender'));
    }

    public function notice()
    {
        return view('website.notice');
    }

    public function research_and_development_centre()
    {
        return view('website.research_and_development_centre');
    }

    public function central_tool_room_and_testing_laboratories()
    {
        return view('website.central_tool_room_and_testing_laboratories');
    }

    public function affilation()
    {
        return view('website.affilation');
    }


    public function thank_you()
    {
        return view('website.thank_you');
    }
}
