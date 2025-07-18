<?php

use App\Http\Controllers\AdminpanelController;
use App\Http\Controllers\Admin\Blogs;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\Coursecontroller;
use App\Http\Controllers\Admin\Eventscontroller;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\Pagecontroller;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamController as AdminTeamController;
use App\Http\Controllers\Admin\TeamsController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Superadmin\SuperadminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Frontcontroller;
use App\Http\Controllers\Front\Commoncontroller;
use App\Http\Controllers\Teamcontroller;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\Swadesh\PropertyController;
use App\Http\Middleware\Authcrm;
use App\Http\Middleware\Superadmin;
use App\Http\Middleware\Manager;
use App\Http\Middleware\Workshop;
use App\Http\Middleware\CuttingMaster;
use App\Http\Middleware\Team;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

//  -website routes -



// Route::match(['get', 'post'], '/', [Frontcontroller::class, 'index'])->name('index');
// // Route::get('/', [Frontcontroller::class, 'index'])->name('index');
// Route::get('/about-us', [Frontcontroller::class, 'aboutus'])->name('aboutus');
// Route::match(['get', 'post'], '/contact-us', [Frontcontroller::class, 'contactus'])->name('contactus');
// Route::get('/image-gallery', [Frontcontroller::class, 'imagegallery'])->name('imagegallery');
// Route::get('/video-gallery', [Frontcontroller::class, 'videogallery'])->name('videogallery');
// Route::get('/institute', [Frontcontroller::class, 'institute'])->name('institute');
// Route::get('/packages', [Frontcontroller::class, 'packages'])->name('packages');
// Route::get('/service', [Frontcontroller::class, 'service'])->name('service');
// Route::get('/service-details/{slug}', [Frontcontroller::class, 'service_details'])->name('service_details');


// Route::get('/submitcontactenquiry', [Commoncontroller::class, 'submitcontactenquiry'])->name('submitcontactenquiry');
// Route::post('/submitcontactenquiry', [Commoncontroller::class, 'submitcontactenquiry'])->name('submitcontactenquiry');

// admin---panel-----work------------------>


Route::match(['get', 'post'], '/admin/maintenance', [AdminpanelController::class, 'maintenance'])->name('maintenance');


Route::middleware([Superadmin::class])->prefix('admin')->group(function () {
    Route::match(['get', 'post'], '/dashboard', [AdminpanelController::class, 'dashboard'])->name('dashboard');
    Route::match(['get', 'post'], '/profile', [AdminpanelController::class, 'updateprofileadmin'])->name('profile');
    Route::post('/change-password', [AdminpanelController::class, 'change_password'])->name('change_password');
    Route::post('updateprofileadmin', [AdminpanelController::class, 'updateprofileadmin'])->name('updateprofileadmin');
    Route::get('/changestatus/{table}/{id}/{colom}/{value}', [AdminpanelController::class, 'changestatus'])->name('changestatus');
    Route::get('/deleterow/{table}/{id}', [AdminpanelController::class, 'deleterow'])->name('deleterow');
    // webpages
    Route::match(['get', 'post'], '/counter-add', [Pagecontroller::class, 'counteradd'])->name('counteradd');
    //pagesettings
    Route::match(['get', 'post'], '/page-setting', [Pagecontroller::class, 'newpage'])->name('newpage');
    Route::match(['get', 'post'], '/seo-management', [Pagecontroller::class, 'seomanagement'])->name('seomanagement');
    Route::match(['get', 'post'], '/editpage/{id}', [Pagecontroller::class, 'editpage'])->name('editpage');


    Route::match(['get', 'post'], '/deletepage/{id}', [Pagecontroller::class, 'deletepage'])->name('deletepage');

    Route::match(['get', 'post'], '/new-access', [Pagecontroller::class, 'newaccess'])->name('newaccess');
    Route::match(['get', 'post'], '/access-management', [Pagecontroller::class, 'accessmanagement'])->name('accessmanagement');
    Route::match(['get', 'post'], '/edit-accessm-anagement/{id}', [Pagecontroller::class, 'editaccessmanagement'])->name('editaccessmanagement');
    //EagleConstruction
    Route::match(['get', 'post'], '/Eagle-Construction', [Pagecontroller::class, 'EagleConstruction'])->name('EagleConstruction');

    //skillsadd
    Route::match(['get', 'post'], '/skillsadd', [Pagecontroller::class, 'skillsadd'])->name('skillsadd');
    //
    Route::match(['get', 'post'], '/workingadd', [Pagecontroller::class, 'workingadd'])->name('workingadd');

    //
    Route::match(['get', 'post'], '/homeadd', [Pagecontroller::class, 'homeadd'])->name('homeadd');

    //aboutus
    Route::match(['get', 'post'], '/about-us', [Pagecontroller::class, 'aboutus'])->name('aboutus');

    // bannners
    Route::get('/home-banners', [Pagecontroller::class, 'home_banners'])->name('home_banners');
    Route::match(['get', 'post'], '/create-banner', [Pagecontroller::class, 'createbanner'])->name('createbanner');
    Route::match(['get', 'post'], '/banners-edit/{id}', [Pagecontroller::class, 'bannersedit'])->name('bannersedit');
    Route::match(['get', 'post'], '/banners-delete/{id}', [Pagecontroller::class, 'banners_delete'])->name('banners_delete');
    Route::match(['get', 'post'], '/banners-status/{id}', [Pagecontroller::class, 'banners_status'])->name('banners_status');
    //team

    Route::match(['get', 'post'], '/edit-team/{id}', [TeamsController::class, 'editteam'])->name('editteam');
    Route::match(['get', 'post'], '/delete-team/{id}', [TeamsController::class, 'deleteteam'])->name('deleteteam');
    Route::match(['get', 'post'], '/team', [TeamsController::class, 'team'])->name('team');
    Route::match(['get', 'post'], '/create-team', [TeamsController::class, 'create'])->name('createteam');


        //Gallery
    Route::match(['get', 'post'], '/edit-gallery/{id}', [TeamsController::class, 'galleryedit'])->name('galleryedit');
    Route::match(['get', 'post'], '/status-gallery/{id}', [TeamsController::class, 'status_gallery_change'])->name('status_gallery_change');
    Route::match(['get', 'post'], '/gallery', [TeamsController::class, 'gallery'])->name('gallery');
    Route::match(['get', 'post'], '/create-gallery', [TeamsController::class, 'create_gallery'])->name('create-gallery');


        //video
        Route::match(['get', 'post'], '/edit-video/{id}', [TeamsController::class, 'videoedit'])->name('videoedit');
        Route::match(['get', 'post'], '/change-status-video/{id}', [TeamsController::class, 'status_video_change'])->name('status_video_change');
        Route::match(['get', 'post'], '/video', [TeamsController::class, 'video'])->name('video');
        Route::match(['get', 'post'], '/create-video', [TeamsController::class, 'create_video'])->name('create-video');

        //video
        Route::match(['get', 'post'], '/edit-course/{id}', [TeamsController::class, 'courseedit'])->name('courseedit');
        Route::match(['get', 'post'], '/change-status-course/{id}', [TeamsController::class, 'status_course_change'])->name('status_course_change');
        Route::match(['get', 'post'], '/course', [TeamsController::class, 'course'])->name('course');
        Route::match(['get', 'post'], '/create-course', [TeamsController::class, 'create_course'])->name('create-course');


    //works
    Route::match(['get', 'post'], '/edit-work/{id}', [WorkController::class, 'edit'])->name('editwork');
    Route::match(['get', 'post'], '/delete-work/{id}', [WorkController::class, 'delete'])->name('deletework');
    Route::match(['get', 'post'], '/work', [WorkController::class, 'work'])->name('work');
    Route::match(['get', 'post'], '/create-work', [WorkController::class, 'create'])->name('create-work');
    //contact
    Route::match(['get', 'post'], '/contact-list', [ContactController::class, 'contactdata'])->name('contact-list');
    Route::match(['get', 'post'], '/contact-delete/{id}', [ContactController::class, 'delete'])->name('contact-delete');

       //appoiment
       Route::match(['get', 'post'], '/appointment-list', [ContactController::class, 'appointmentdata'])->name('appointment-list');
       Route::match(['get', 'post'], '/appointment-delete/{id}', [ContactController::class, 'delete_appointment'])->name('appointment-delete');

   
    Route::match(['get', 'post'], '/genral-setting', [Pagecontroller::class, 'genralsetting'])->name('genralsetting');
  
    // packages
    Route::match(['get', 'post'], '/create-packages', [Pagecontroller::class, 'createpackages'])->name('createpackages');
    Route::match(['get', 'post'], '/packages-list', [Pagecontroller::class, 'packages_list'])->name('packages_list');
    Route::match(['get', 'post'], '/packages-update/{id}', [Pagecontroller::class, 'packages_update'])->name('packages_update');
    Route::match(['get', 'post'], '/packages-change-status/{id}', [Pagecontroller::class, 'packages_change_status'])->name('packages_change_status');



// projects

    Route::match(['get', 'post'], '/seo-management', [Pagecontroller::class, 'seomanagement'])->name('seomanagement');
    Route::match(['get', 'post'], '/new-page', [Pagecontroller::class, 'newpage'])->name('newpage');
    Route::match(['get', 'post'], '/edit-page/{id}', [Pagecontroller::class, 'editpage'])->name('editpage');
    Route::match(['get', 'post'], '/partners', [Pagecontroller::class, 'partners'])->name('partners');
    Route::match(['get', 'post'], '/new-partner', [Pagecontroller::class, 'new_partner'])->name('new_partner');
    Route::match(['get', 'post'], '/edit-partners/{id}', [Pagecontroller::class, 'editpartners'])->name('editpartners');
 Route::match(['get', 'post'], '/events', [Blogs::class, 'events'])->name('events');
    Route::match(['get', 'post'], '/new-event', [Blogs::class, 'new_event'])->name('new_event');
    Route::match(['get', 'post'], '/edit-events/{id}', [Blogs::class, 'edit_events'])->name('edit_events');
    Route::match(['get', 'post'], '/blogs', [Blogs::class, 'blogs'])->name('blogs');
    Route::match(['get', 'post'], '/create-blog', [Blogs::class, 'newblog'])->name('newblog');
    Route::match(['get', 'post'], '/blogs-edit/{id}', [Blogs::class, 'editblogs'])->name('editblogs');
    Route::match(['get', 'post'], '/blogs-delete/{id}', [Blogs::class, 'blogsdelete'])->name('blogsdelete');
    Route::match(['get', 'post'], '/contact-enquires', [Blogs::class, 'contactenquires'])->name('contactenquires');
    Route::match(['get', 'post'], '/view-enquiry/{id}', [Blogs::class, 'viewenquiry'])->name('viewenquiry');
    Route::match(['get', 'post'], '/categories', [Coursecontroller::class, 'categories'])->name('categories');

    Route::match(['get', 'post'], '/category/types/{category_id}', [Coursecontroller::class, 'categories_types'])->name('categories_types');


    // amenity

    Route::match(['get', 'post'], '/amenity', [Coursecontroller::class, 'amenity'])->name('amenity');
    Route::match(['get', 'post'], '/new-amenity', [Coursecontroller::class, 'newamenity'])->name('newamenity');
    Route::match(['get'], '/get-amenity/{id}', [Coursecontroller::class, 'getamenity'])->name('getamenity');
    Route::match(['post'], '/update-amenity/{id}', [Coursecontroller::class, 'updateamenity'])->name('updateamenity');

    // country


    Route::match(['get'], '/country', [Coursecontroller::class, 'country'])->name('country');
    Route::match(['post'], '/new-country', [Coursecontroller::class, 'newcountry'])->name('newcountry');
    Route::match(['get'], '/get-country/{id}', [Coursecontroller::class, 'getcountry'])->name('getcountry');
    Route::match(['post'], '/edit-country/{id}', [Coursecontroller::class, 'updatecountry'])->name('updatecountry');

        // status

    Route::match(['get'], '/states', [Coursecontroller::class, 'states'])->name('states');
    Route::match(['get'], '/get-state/{id}', [Coursecontroller::class, 'getstate'])->name('getstate');

// Category new
Route::match(['get', 'post'], '/service-categories-list', [Coursecontroller::class, 'service_categories_list'])->name('service_categories_list');
Route::match(['get', 'post'], '/service-categories', [Coursecontroller::class, 'servicecategories'])->name('servicecategories');
Route::match(['get', 'post'], '/service-categories-change/{id}', [Coursecontroller::class, 'service_categories_change'])->name('service_categories_change');
Route::match(['get', 'post'], '/edit-service-category/{id}', [Coursecontroller::class, 'edit_service_categories'])->name('edit_service_categories');
Route::match(['get', 'post'], '/service-delete-category/{id}', [Coursecontroller::class, 'service_delete_category'])->name('service_delete_category');

// Category new
Route::match(['get', 'post'], '/blogs-categories-list', [Coursecontroller::class, 'blogs_categories_list'])->name('blogs_categories_list');
Route::match(['get', 'post'], '/blogs-categories', [Coursecontroller::class, 'blogscategories'])->name('blogscategories');
Route::match(['get', 'post'], '/blogs-categories-change/{id}', [Coursecontroller::class, 'blogs_categories_change'])->name('blogs_categories_change');
Route::match(['get', 'post'], '/edit-blogs-category/{id}', [Coursecontroller::class, 'edit_blogs_categories'])->name('edit_blogs_categories');
Route::match(['get', 'post'], '/blogs-delete-category/{id}', [Coursecontroller::class, 'blogs_delete_category'])->name('blogs_delete_category');



    Route::match(['get', 'post'], '/get-category-type-details', [Coursecontroller::class, 'getcategorytypedetails'])->name('getcategorytypedetails');


    Route::match(['get', 'post'], '/get-categories-type/{category_id}', [Coursecontroller::class, 'categories_types_ajax_get'])->name('categories_types_ajax_get');
    Route::match(['get', 'post'], '/new-categories', [Coursecontroller::class, 'newcategories'])->name('newcategories');
    Route::match(['get', 'post'], '/edit-category/{id}', [Coursecontroller::class, 'editategories'])->name('editategories');
    Route::match(['get', 'post'], '/get-categories/{id}', [Coursecontroller::class, 'getcategories'])->name('editategories');
    Route::match(['get', 'post'], '/delete/{table}/{id}/{image}', [Pagecontroller::class, 'deleterow'])->name('deleterownew');

// Blog------
Route::match(['get', 'post'], '/create-blog-categories', [Coursecontroller::class, 'create_blog_categories'])->name('createblogcategories');


// area---list
Route::match(['get', 'post'], '/create-areas', [Coursecontroller::class, 'create_areas'])->name('create_areas');
Route::match(['get', 'post'], '/create-areas-edit/{id}', [Coursecontroller::class, 'create_areas_edit'])->name('create_areas_edit');
Route::match(['get', 'post'], '/areas-delete/{id}', [Coursecontroller::class, 'areas_delete'])->name('areas.delete');



// ammount---list
Route::match(['get', 'post'], '/amount-create', [Coursecontroller::class, 'amount_create'])->name('amount_create');
Route::match(['get', 'post'], '/create-areas-edit/{id}', [Coursecontroller::class, 'create_areas_amount'])->name('create_areas_amount');
Route::match(['get', 'post'], '/amount-delete/{id}', [Coursecontroller::class, 'amount_delete'])->name('amount-delete');

// Reports
// Route::match(['get', 'post'], '/reports-list', [Coursecontroller::class, 'reports_list'])->name('reports_list');



// rate--list
Route::match(['get', 'post'], '/create-rate-list', [Coursecontroller::class, 'create_rate_list'])->name('create.ratelist');
Route::match(['get', 'post'], '/rate-list', [Coursecontroller::class, 'rate_list'])->name('rate.list');
Route::match(['get', 'post'], '/rate-edit/{id}', [Coursecontroller::class, 'rate_edit'])->name('rate.edit');
Route::match(['get', 'post'], '/rate-delete/{id}', [Coursecontroller::class, 'rate_delete'])->name('rate.delete');

// customers-
Route::match(['get', 'post'], '/create-customer', [Coursecontroller::class, 'create_customer'])->name('create.customer');
Route::match(['get', 'post'], '/customer-list', [Coursecontroller::class, 'customer_list'])->name('customer.list');
Route::match(['get', 'post'], '/customer-edit/{id}', [Coursecontroller::class, 'customer_edit'])->name('customer.edit');
Route::match(['get', 'post'], '/customer-delete/{id}', [Coursecontroller::class, 'customer_delete'])->name('customer.delete');



// Reports
Route::match(['get', 'post'], '/create-access', [AuthController::class, 'create_access'])->name('create.access');
Route::match(['get', 'post'], '/access-list', [AuthController::class, 'access_list'])->name('access.list');
Route::match(['get', 'post'], '/access-edit/{id}', [AuthController::class, 'access_edit'])->name('access_edit');
Route::match(['get', 'post'],    '/access-delete/{id}', [AuthController::class, 'access_delete'])->name('access_delete');

// Booking
Route::match(['get', 'post'], '/create-booking', [Coursecontroller::class, 'create_booking'])->name('create.booking');
Route::match(['get', 'post'], '/bookin-list', [Coursecontroller::class, 'booking_list'])->name('booking.list');
Route::match(['get', 'post'], '/bookin-envoice/{id}', [Coursecontroller::class, 'bookin_envoice'])->name('bookin_envoice');
Route::match(['get', 'post'], '/bookin-edit/{id}', [Coursecontroller::class, 'bookin_edit'])->name('bookin_edit');
Route::match(['get', 'post'], '/bookin-delete/{id}', [Coursecontroller::class, 'bookin_delete'])->name('bookin_delete');
Route::match(['get', 'post'], '/view-envoice/{id}', [Coursecontroller::class, 'view_envoice'])->name('view.envoice');



// Reports
Route::match(['get', 'post'], '/create-reports', [Coursecontroller::class, 'create_reports'])->name('create.reports');
Route::match(['get', 'post'], '/reports-list', [Coursecontroller::class, 'reportss_list'])->name('reports.list');
Route::match(['get', 'post'], '/reports-edit/{id}', [Coursecontroller::class, 'reports_edit'])->name('reports.edit');
Route::match(['get', 'post'], '/report-delete/{id}', [Coursecontroller::class, 'report_delete'])->name('report.delete');
Route::match(['get', 'post'], '/reports-envoice/{id}', [Coursecontroller::class, 'reports_envoice'])->name('reports_envoice');

Route::get('/get-reports-details/{id}', [Coursecontroller::class, 'getreportsDetails']);

// ----


Route::get('/get-booking-details/{id}', [Coursecontroller::class, 'getBookingDetails']);


Route::get('/get-amount-by-city-area', [Coursecontroller::class, 'getAmountByCityArea'])->name('get-amount-by-city-area');




    //Project
    Route::match(['get', 'post'], '/add-project', [ProjectController::class, 'addproject'])->name('add-project');
    Route::match(['get', 'post'], '/projects-list', [ProjectController::class, 'index'])->name('projects-list');
    Route::match(['get', 'post'], '/projects-update/{id}', [ProjectController::class, 'update'])->name('project-update');

});





Route::middleware([Manager::class])->prefix('Driver')->group(function () {
    Route::match(['get', 'post'], '/dashboard', [PropertyController::class, 'managerdashboard'])->name('managersdashboard');

Route::match(['get', 'post'], '/create-booking-manager', [Pagecontroller::class, 'create_booking_manager'])->name('create_booking_manager');
Route::match(['get', 'post'], '/bookin-list-manager', [Pagecontroller::class, 'bookin_list_manager'])->name('bookin_list_manager');
Route::match(['get', 'post'], '/bookin-envoice-manager/{id}', [Pagecontroller::class, 'bookin_envoice_manager'])->name('bookin_envoice_manager');
Route::match(['get', 'post'], '/bookin-edit-manager/{id}', [Pagecontroller::class, 'bookin_edit_manager'])->name('bookin-_edit_manager');
Route::match(['get', 'post'], '/bookin-delete-manager/{id}', [Pagecontroller::class, 'bookin_delete_manager'])->name('bookin_delete_manager');
Route::match(['get', 'post'], '/view-envoice-manager/{id}', [Pagecontroller::class, 'view_envoice_manager'])->name('view.envoice');
// Route::get('/get-amount-by-city-area', [Pagecontroller::class, 'getAmountByCityArea'])->name('get-amount-by-city-area');
Route::get('/get-booking-details/{id}', [Pagecontroller::class, 'getBookingDetails']);



// Reports
Route::match(['get', 'post'], '/create-reports-driver', [Coursecontroller::class, 'create_reports_driver'])->name('create.reports_driver');
Route::match(['get', 'post'], '/reports-list-driver', [Coursecontroller::class, 'reportss_list_driver'])->name('reports.list.driver');
Route::match(['get', 'post'], '/reports-driver-edit/{id}', [Coursecontroller::class, 'reports_driver_edit'])->name('reports.edit.driver');
Route::match(['get', 'post'], '/report-driver-delete/{id}', [Coursecontroller::class, 'report_delete_driver'])->name('report.driver.delete');
Route::match(['get', 'post'], '/reports-envoice/{id}', [Coursecontroller::class, 'reports_envoice'])->name('reports_envoice');

Route::get('/get-reports-driver-details/{id}', [Coursecontroller::class, 'getreportsDetailsdriver']);

// ----

});

// AUTH---WORK----
Route::match(['get', 'post'], '/profile', [AuthController::class, 'profile'])->name('profile');
Route::match(['get', 'post'], '/sign-up', [AuthController::class, 'sign_up'])->name('sign_up');
Route::match(['get', 'post'], '/sign-in', [AuthController::class, 'signin'])->name('signin');


Route::match(['get', 'post'], '/admin-login', [AuthController::class, 'login'])->name('adminlogin');
Route::match(['get', 'post'], '/forgot-password', [AuthController::class, 'fotgotpassword'])->name('fotgotpassword');
Route::match(['get', 'post'], '/logout', [AuthController::class, 'logout'])->name('logout');
Route::match(['get', 'post'], 'reset-password/{token}', [AuthController::class, 'ResetPassword'])->name('reset-password');



Route::post('/admin/filter-reports-by-date', [Coursecontroller::class, 'filterReportsByDate']);