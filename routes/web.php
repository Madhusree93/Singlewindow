<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('home');

/*===========================================Admin URL==================================*/
Route::get('admin/login', 'Auth\AdminLoginController@showloginform')->name('admin.login');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
Route::get('admin/dashboard', 'AdminController@index')->name('admin.dashboard');
Route::get('admin/course', 'AdminController@course')->name('admin.course');
Route::get('admin/course-status/{id?}', 'AdminController@course_status')->name('admin.course.status');
Route::post('admin/course-add', 'AdminController@add_course')->name('admin.course.submit');
Route::get('admin/course-delete/{id?}', 'AdminController@delete_course')->name('admin.delete.course');
Route::get('admin/course-edit/{id?}', 'AdminController@edit_course')->name('admin.edit.course');
Route::post('/admin/course-update', 'AdminController@update_course')->name('admin.course_update');

Route::get('admin/contact-us', 'AdminController@contact_us')->name('admin.contact_us');
Route::get('admin/apply-now', 'AdminController@apply_now')->name('admin.apply_now');
//Home Page Setting
Route::get('admin/homepage_setting', 'AdminController@homepage_setting')->name('admin.homepage_setting');
Route::post('admin/homepage_setting-update', 'AdminController@update_homepage_setting')->name('admin.update.homepage');
Route::get('admin/web-settings', 'AdminController@settings')->name('admin.settings');
Route::post('admin/websettings', 'AdminController@update_settings')->name('admin.add.settings');

//For gallery
Route::get('admin/gallery', 'AdminController@gallery')->name('admin.gallery');
Route::post('admin/add-gallery', 'AdminController@add_gallery')->name('admin.add.gallery');
Route::get('admin/gallery-status-update/{id}', 'AdminController@gallery_status_update')->name('admin.gallery.status');
Route::get('admin/edit-gallery/{id}', 'AdminController@edit_gallery')->name('admin.edit.gallery');
Route::get('admin/delete-gallery/{id}', 'AdminController@delete_gallery')->name('admin.delete.gallery');
Route::put('admin/edit-gallery/{id}', 'AdminController@update_gallery')->name('admin.gallery.update');

//For gallery tab
Route::get('admin/gallery-tab', 'AdminController@gallery_tab')->name('admin.gallery-tab');
Route::post('admin/add-gallery-tab', 'AdminController@add_gallery_tab')->name('admin.add.gallery-tab');
Route::get('admin/gallery-tab-status-update/{id}', 'AdminController@gallery_tab_status_update')->name('admin.gallery-tab.status');
Route::get('admin/edit-gallery-tab/{id}', 'AdminController@edit_gallery_tab')->name('admin.edit.gallery-tab');
Route::get('admin/delete-gallery-tab/{id}', 'AdminController@delete_gallery_tab')->name('admin.delete.gallery-tab');
Route::put('admin/edit-gallery-tab/{id}', 'AdminController@update_gallery_tab')->name('admin.gallery-tab.update');
//recognition-affilition
Route::get('admin/recognition-affilition', 'AdminController@recognition_affilition')->name('admin.recognition_affilition');
Route::post('admin/recognition-affilition', 'AdminController@submit_recognition_affilition')->name('submit.admin.recognition_affilition');
//.Faculty
Route::get('admin/teacher', 'AdminController@teacher')->name('admin.teacher');
Route::post('admin/teacher', 'AdminController@submit_teacher')->name('admin.submit.teacher');
Route::get('admin/edit_faculty/{id}', 'AdminController@edit_faculty')->name('admin.edit_faculty');

//testimonial
Route::get('admin/testimonial', 'AdminController@testimonial')->name('admin.testimonial');
Route::post('admin/add-testimonial', 'AdminController@add_testimonial')->name('admin.add.testimonial');
Route::get('admin/delete-testimonial/{id?}', 'AdminController@delete_testimonial')->name('admin.delete.testimonial');
Route::get('admin/edit-testimonial/{id?}', 'AdminController@edit_testimonial')->name('admin.edit.testimonial');
Route::post('admin/edit-testimonial/', 'AdminController@update_testimonial')->name('admin.update.testimonial');

//department
Route::get('admin/department', 'AdminController@department')->name('admin.departmet');
Route::post('admin/add-department', 'AdminController@add_department')->name('admin.add.departmet');
Route::get('admin/department-delete/{id?}', 'AdminController@department_delete')->name('admin.departmet.delete');

Route::get('admin/department-edit/{id?}', 'AdminController@department_edit')->name('admin.departmet.edit');
Route::post('admin/department-update', 'AdminController@department_update')->name('admin.departmet.update');
Route::get('admin/delete-course-college/{id?}', 'AdminController@delete_course_college')->name('admin.delete.course.college');
Route::post('admin/update_course_college', 'AdminController@update_course_college')->name('admin.update_course_college');
Route::post('admin/add_course_inCollege', 'AdminController@add_course_inCollege')->name('admin.add_course_inCollege');

Route::get('admin/page', 'AdminController@desk')->name('admin.desk');
Route::post('admin/desk', 'AdminController@add_desk')->name('admin.add.desk');
Route::get('admin/desk/edit/{id?}', 'AdminController@edit_desk')->name('admin.edit.desk');
Route::post('admin/desk/update', 'AdminController@update_page')->name('admin.update.desk');

//News & Events

Route::get('admin/notice', 'AdminController@notice_event')->name('admin.notice_event');
Route::post('admin/notice_insert', 'AdminController@notice_insert')->name('admin.notice_insert');
Route::get('admin/notice_delete/{id?}', 'AdminController@notice_delete')->name('admin.notice_delete');
Route::get('admin/seo_settings', 'AdminController@seo_settings')->name('admin.seo_settings');
Route::post('admin/seo_settings_update', 'AdminController@seo_settings_update')->name('admin.update.seo');


//Tender

Route::get('admin/tender', 'AdminController@tender')->name('admin.tender');
Route::post('admin/tender_insert', 'AdminController@tender_insert')->name('admin.tender_insert');
Route::get('admin/tender_delete/{id?}', 'AdminController@notice_delete')->name('admin.tender_delete');



//blog

Route::get('admin/blog', 'AdminController@blog')->name('admin.blog');
Route::post('admin/blog', 'AdminController@post_blog')->name('admin.add.blog');
Route::get('admin/delete-blog/{id?}', 'AdminController@delete_blog')->name('admin.delete.blog');
Route::get('admin/edit-blog/{id?}', 'AdminController@edit_blog')->name('admin.edit.blog');
Route::post('admin/edit-blog', 'AdminController@update_blog')->name('admin.update.blog');

//video
Route::get('admin/video-gallery', 'AdminController@video_gallery')->name('admin.video-gallery');
Route::post('admin/video-gallery', 'AdminController@add_video_gallery')->name('admin.add.videogallery');
Route::get('admin/video-gallery-delete/{id?}', 'AdminController@delete_video_gallery')->name('admin.video.delete');

//placemet
Route::get('admin/placement', 'AdminController@placement')->name('admin.placement');
Route::post('admin/placement_insert', 'AdminController@placement_insert')->name('admin.placement_insert');
Route::get('admin/placement-edit/{id}', 'AdminController@placement_edit')->name('admin.edit.placement');
Route::post('/admin/placement-update', 'AdminController@update_placement')->name('admin.update.placement');
Route::get('/admin/placement-delete/{id}', 'AdminController@delete_placement')->name('admin.delete.placement');


Route::get('admin/career', 'AdminController@career')->name('admin.career.index');
Route::post('admin/add-career', 'AdminController@add_career')->name('admin.add.career');
Route::get('admin/delete-career/{id?}', 'AdminController@adddelete_career')->name('admin.delete.career');
Route::get('admin/edit-career/{id?}', 'AdminController@edit_career')->name('admin.edit.career');
Route::post('admin/update-career', 'AdminController@update_career')->name('admin.update.career');
Route::get('admin/career-application', 'AdminController@career_application')->name('admin.career.application');
//=============================================================================================
//==========================New Code=================================
/*----------------college----------------------*/
Route::get('admin/college', 'AdminController@college')->name('admin.college');
Route::post('admin/college_insert', 'AdminController@college_insert')->name('admin.college_insert');

/*----------------Department----------------------*/
Route::get('admin/department', 'AdminController@department')->name('admin.department');
Route::post('admin/department_insert', 'AdminController@department_insert')->name('admin.department_insert');

//===================================================================


/*====================website URL==================*/
Route::get('/', 'WebsiteController@index')->name('website.home');
Route::get('/about', 'WebsiteController@about')->name('about');
Route::get('/blog', 'WebsiteController@blog')->name('blog');
Route::get('/blog-detail/{id?}', 'WebsiteController@blog_detail')->name('blog_detail');
Route::get('our-companies', 'WebsiteController@companies')->name('companies');
Route::get('/gallery', 'WebsiteController@gallery')->name('gallery');
Route::get('/contact_us', 'WebsiteController@contact_us')->name('contact_us');
Route::post('/contact_us_insert','WebsiteController@contact_us_insert')->name('contact_us_insert');
Route::get('/thank_you', 'WebsiteController@thank_you')->name('thank_you');

// Route::get('/colleges','WebsiteController@colleges')->name('colleges');
// Route::get('/college_details/{slug?}','WebsiteController@college_details')->name('college_details');
// Route::get('/course','WebsiteController@course')->name('course');
// Route::get('/course_details/{slug?}','WebsiteController@course_details')->name('course_details');
// Route::get('/academics','WebsiteController@academics')->name('academics');
// Route::get('/admission','WebsiteController@admission')->name('admission');
// Route::get('/image_gallery','WebsiteController@image_gallery')->name('image_gallery');
// Route::get('/blog','WebsiteController@blog')->name('blog');
// Route::get('/blog_details/{slug?}','WebsiteController@blog_details')->name('blog_details');
// Route::get('/contact_us','WebsiteController@contact_us')->name('contact_us');
// Route::post('/contact_us_insert','WebsiteController@contact_us_insert')->name('contact_us_insert');

// Route::post('/coursefetch','WebsiteController@coursefetch')->name('coursefetch');
// Route::post('/admission_insert','WebsiteController@admission_insert')->name('admission_insert');

// Route::get('/chairman_desk','WebsiteController@chairman_desk')->name('chairman_desk');

// Route::get('/ignou_study_centre','WebsiteController@ignou_study_centre')->name('ignou_study_centre');
// Route::get('/career','WebsiteController@career')->name('career');
// Route::get('/campus_tour','WebsiteController@campus_tour')->name('campus_tour');
// Route::get('/video_audio','WebsiteController@video_audio')->name('video_audio');
// Route::get('/mgno_social_welfare','WebsiteController@mgno_social_welfare')->name('mgno_social_welfare');
// Route::get('/tender','WebsiteController@tender')->name('tender');
// Route::get('/notice','WebsiteController@notice')->name('notice');
// Route::get('/research-and-development-centre','WebsiteController@research_and_development_centre')->name('research_and_development_centre');
// Route::get('/affilation','WebsiteController@affilation')->name('affilation');
// Route::get('/central-tool-room-and-testing-laboratories','WebsiteController@central_tool_room_and_testing_laboratories')->name('central-tool-room-and-testing-laboratories');

// Route::get('/thank_you','WebsiteController@thank_you')->name('thank_you');
