<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Info;
use App\Models\Blogmodel;
use App\Models\Contact;
use App\Models\Testimonials;
use App\Models\Team;
use App\Models\Service;
use App\Models\Appointment;
use App\Models\Banners;
use App\Models\Insttue;
use App\Models\Packages;
use App\Models\Gallery;
use App\Models\Videos;
use App\Models\Courses;

class Frontcontroller extends Controller
{
    public function index(Request $request){
      
        $data = Info::find(7);
        $row = json_decode($data->info_one);
        $first_Category = Category::where('status','Y')->first();
        // $data['property'] = Property::with('category')->where('status',1)->where('property_type','latest_properties')->where('purpose',$first_Category->id)->latest()->take(6)->get();
        // $data['lands'] = Property::with('category')->where('status',1)->where('property_type','land_plot')->latest()->take(6)->get();
        // $data['projects_builder'] =  Property::with('category')->where('status',1)->where('property_type','projects_builder')->latest()->take(6)->get();
        $counters = Info::find(16);
        $row1233 = $counters ? json_decode($counters->info_one) : null;
        $data['user'] = Testimonials::where('status','Y')->orderBy('created_at', 'desc')->get();
        $teams = Team::get();
        $testimonial = Testimonials::where('status', 'Y')->get();

        if ($request->isMethod('POST')) {
            
            $appointment = new Appointment;
            $appointment->f_name = $request->f_name;
            $appointment->l_name = $request->l_name;
            $appointment->email = $request->email;
            $appointment->phone = $request->phone;
            $appointment->message = $request->message;
            $appointment->save();
    }

    $banners = Banners::where('status','Y')->get();
    
    $Service = Service::where('status','Y')->get();
    $course = Courses::where('status','Y')->get();
    $package = Packages::where('status','Y')->take(2)->get();
        return view('front/index',$data,compact('course','first_Category','package','Service','banners','row','data','row1233','counters','teams','testimonial'));
}

    public function getproperties($id){
        $property = Property::with('category')->where('status',1)->where('purpose',$id)->where('property_type','latest_properties')->latest()->take(6)->get();
        return view('front.particals.category_wise_home_property',compact('property'));
    }

    public function aboutus(){
        $testimonial = Testimonials::where('status', 'Y')->get();
        $counters = Info::find(16);
        $row1233 = $counters ? json_decode($counters->info_one) : null;
        $data = Info::find(7);
        $row = json_decode($data->info_one);
        return view('front/aboutus',compact('row','data','testimonial','row1233','counters'));
    }

    public function loaneligibility(){
        return view('front/loaneligibility');
    }

    public function sbihomeloaninterestrates(){
        return view('front/sbihomeloaninterestrates');
    }

    public function hdfchomeloaninterestrates(){
        return view('front/hdfchomeloaninterestrates');
    }

    public function contactus(Request $request){
        if ($request->isMethod('POST')) {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'required|string|max:15',
                'services' => 'required|string|max:15',
                'message' => 'required|string',
            ]);
            $contact = new Contact;
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->services = $request->services;
            $contact->message = $request->message;
            $contact->save();
            return redirect()->back()->with('success', 'data submited');
        }
        return view('front.contact');
    }


    public function imagegallery(){
        $gallery = Gallery::where('status','Y')->get();
        return view('front/imagegallery',compact('gallery'));
    }

    public function videogallery(){
        $video = Videos::where('status','Y')->get();
        return view('front/videogallery',compact('video'));
    }

    public function institute(){
        $insttue = Insttue::where('status','Y')->get();
        return view('front/institute',compact('insttue'));
    }


    public function packages(){
        $package = Packages::where('status','Y')->get();
        return view('front/packages',compact('package'));
    }

    public function service(){
        $testimonial = Testimonials::where('status', 'Y')->get();
        return view('front/service',compact('testimonial'));
    }

    public function service_details($slug){
        $testimonial = Testimonials::where('status', 'Y')->get();
        $data['Service'] = Service::where('slug', $slug)->first();
        return view('front/service_details',$data,compact('testimonial'));
    }

    public function blog(){
        $data['blog'] = Blogmodel::get();
        return view('front/blog',$data);
    }

    public function blogsingle($slug){
        $data['blog'] = Blogmodel::where('slug', $slug)->first();
        return view('front/blogsingle',$data);
    }

    public function Vendors(){
        return view('front/Vendors');
    }

    public function projects(){
        return view('front/projects');
    }


    public function project_details(){
        return view('front/project_details');
    }

    public function faq(){
        $data = Faq::where('status','Y')->get();
        return view('front/faq',compact('data'));
    }

    public function PrivacyPolicy(){
        $data = Info::find(2);

        return view('front/PrivacyPolicy',compact('data'));
    }

    public function termsandconditions(){
        $data = Info::find(1);
        return view('front/termsandconditions',compact('data'));
    }

    public function homeloanemicalculator(){
        return view('front/homeloanemicalculator');
    }
    public function properties(){
        $data =  Property::with('category')->paginate(20);
        return view('front/properties',compact('data'));
    }

    public function propertiesdetail($slug){
        $row =  Property::with('category')->where('slug',$slug)->firstorfail();
        $property = Property::with('category')->where('status',1)->where('purpose',$row->purpose)->latest()->take(6)->get();
        return view('front/propertiesview',compact('row','property'));
    }

    public function getcategorydetails(Request $request){
        $category_id = $request->id;

        $categories = Category::where('category_type',$category_id)->where('status','Y')->get();
        $html = '';
        foreach($categories as $val){
            $html .= '<option value="'.$val->id.'">'.$val->title.'</option>';
        }

        return $html;

    }
}
