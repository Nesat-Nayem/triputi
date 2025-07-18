<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\Info;
use App\Models\Testimonials;
use App\Models\ProjectModel;
use App\Models\Franchise;
use App\Models\Blogmodel;
use App\Models\Blogcomments;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Studentszone;
use App\Models\Reels;
use App\Models\Faq;
use App\Models\Fenquiry;
use App\Models\Pagesetting;
use App\Models\PlacementEnq;
use App\Models\Project;
use App\Models\Service;
use App\Models\Team;
use App\Models\Work;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use PhpParser\Node\Stmt\Echo_;
use PhpParser\Node\Stmt\Return_;

class Commoncontroller extends Controller
{


    // public function termsandconditions($category)
    // {
    //     // $projects = Project::where('category', $category)->get();
    //     return view('front.terms-and-conditions);
    // }
    public function getCategoryProjects($category)
    {
        $projects = Project::where('category', $category)->get();
        return view('project.colbox', compact('projects'));
    }


    public function index()
    {

        $testimonial = Testimonials::where('status', 'Y')->get();
        $Banners = Banners::where('status', 'Y')->get();
        $workinssdata = Info::where('id', 14)->first();
        $workinss = $workinssdata ? json_decode($workinssdata->info_one) : null;
        $aboutus = Info::where('id', 7)->first();
        $info_one = json_decode($aboutus->info_one);
        $homeserve1 = Info::where('id', 8)->first();
        $homeserve1_data = json_decode($homeserve1->info_one);
        $homeserve2 = Info::where('id', 9)->first();
        $homeserve2_data = json_decode($homeserve2->info_one);
        $homeserve3 = Info::where('id', 10)->first();
        $homeserve3_data = json_decode($homeserve3->info_one);

        $welcomeBox1 = Info::where('id', 11)->first();
        $welcomeBox1 = $welcomeBox1 ? json_decode($welcomeBox1->info_one) : null;

        $welcomeBox2 = Info::where('id', 12)->first();
        $welcomeBox2 = $welcomeBox2 ? json_decode($welcomeBox2->info_one) : null;

        $welcomeBox3 = Info::where('id', 13)->first();
        $welcomeBox3 = $welcomeBox3 ? json_decode($welcomeBox3->info_one) : null;
        $team = Team::where('status', 'Y')->get();
        $blog = Blogmodel::with('get_Category')
            ->where('status', 'Y')->get();
        $category = DB::table('category')->where('type', 'project')->where('status', 'Y')->get(['id', 'title']);

        $projects = Project::where('status', 'Y')->get();
        
        return view('front.index', compact('aboutus', 'testimonial', 'workinssdata',   'workinss', 'Banners', 'info_one', 'team', 'blog', 'homeserve1_data', 'homeserve2_data', 'homeserve3_data', 'category', 'projects', 'welcomeBox1', 'welcomeBox2', 'welcomeBox3'));
    }


    public function aboutus(){
        return view('front.aboutus');
    }


    public function imagegallery() {
        return view('front.imagegallery');
    }

    public function videogallery() {
        return view('front.videogallery');
    }





    public function shop()
    {
        return view('front.shop');
    }

    public function partners()
    {
        return view('front.partners');
    }

    public function event()
    {
        return view('front.event');
    }

    public function projects()
    {
        $category = DB::table('category')->where('type', 'project')->where('status', 'Y')->get(['id', 'title']);

        $projects = Project::where('status', 'Y')->get();
        return view('front.projects', compact('projects', 'category'));
    }

    public function teamdetails($slug)
    {

        $teams = Team::where('slug', $slug)->where('status', 'Y')->first();

        // if ($request->method() == "POST") {
        //     $Contact = new Contact();
        //     $Contact->name = $request->name;
        //     $Contact->email = $request->email;
        //     $Contact->phone = $request->phone;
        //     $Contact->code = $request->code;
        //     $Contact->message = $request->message;
        //     $Contact->services = $request->services;
        //     $Contact->save();
        // }
        return view('front.team-details', compact('teams'));
    }

    public function causes()
    {
        return view('front.causes');
    }


    public function about()
    {
        // $totalProjects = Project::count();


        $counters = Info::where('id', 16)->first();
        $counters = json_decode($counters->info_one);

        $team = Team::where('status', 'Y')->get();
        $works = Work::where('status', 'Y')->get();
        $aboutus = Info::where('id', 7)->first();

        // Make sure $aboutus exists (i.e., a record with id 7 was found)
        if (!$aboutus) {
            // Handle the case if no data is found (optional)
            return redirect()->back()->with('error', 'About Us data not found.');
        }

        $info_one = json_decode($aboutus->info_one);

        $Pagesetting = Pagesetting::where('id', 2)->first();

        return view('front.about', compact('team', 'aboutus', 'info_one', 'works', 'counters', 'Pagesetting'));
    }


    public function contact(Request $request)
    {
        if ($request->method() == "POST") {
            // $validatedData = $request->validate([
            //     'name' => ['required'],
            //     'email' => ['required', 'email'],
            //     'phone' => ['required', 'numeric', 'digits:10'],
            //     'subject' => ['required'],
            //     'message' => ['required'],
            // ]);

            $Contact = new Contact();
            $Contact->name = $request->name;
            $Contact->email = $request->email;
            $Contact->phone = $request->phone;
            $Contact->code = $request->code;
            $Contact->message = $request->message;
            $Contact->services = $request->services;
            $Contact->save();
        }
        return view('front.contact');
    }

    public function contactsubmitfree(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => ['required'],
        //     'email' => ['required', 'email'],
        //     'phone' => ['required', 'numeric', 'digits:10'],
        //     'subject' => ['required'],
        //     'message' => ['required'],
        // ]);


        $Contact = new Contact();
        $Contact->name = $request->name;
        $Contact->email = $request->email;
        $Contact->phone = $request->phone;
        $Contact->code = $request->code;
        $Contact->message = $request->message;
        $Contact->services = $request->services;
        $Contact->save();
        return redirect()->back()->with('success', 'Your inquiry has been successfully submitted!');;
    }

    public function contactsubmit(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => ['required'],
        //     'email' => ['required', 'email'],
        //     'phone' => ['required', 'numeric', 'digits:10'],
        //     'subject' => ['required'],
        //     'message' => ['required'],
        // ]);


        $Contact = new Contact();
        $Contact->name = $request->name;
        $Contact->email = $request->email;
        $Contact->phone = $request->phone;
        $Contact->code = $request->code;
        $Contact->message = $request->message;
        $Contact->services = $request->services;
        $Contact->save();
        return redirect()->back()->with('success', 'Your inquiry has been successfully submitted!');;
    }

    public function projectsdetails($slug)
    {
        $relatedProjects = Project::with('get_Categorys')->where('slug', $slug)->where('status', 'Y')->latest()->take(3)->get();
        $project = Project::with('get_Categorys')->where('slug', $slug)->where('status', 'Y')->firstOrFail();
        $category = DB::table('category')->where('type', 'project')->where('status', 'Y')->get(['id', 'title']);
        return view('front.projects-details', compact('project', 'category', 'relatedProjects'));
    }
    public function admission()
    {
        return view('front.admission');
    }

    public function blogsingle($slug)
    {
        // $aboutus = Info::where('id', 7)->first();

        // // Make sure $aboutus exists (i.e., a record with id 7 was found)
        // if (!$aboutus) {
        //     // Handle the case if no data is found (optional)
        //     return redirect()->back()->with('error', 'About Us data not found.');
        // }

        // $info_one = json_decode($aboutus->info_one);

        // $comment = Comment::get();
        // $blogs = Blogmodel::with('get_Category')
        //     ->where('status', 'Y')
        //     ->get();
        // $blog = Blogmodel::with('get_Category')->where('slug', $slug)->where('status', 'Y')->firstOrFail();
        // $category = DB::table('category')->where('type', 'blogs')->where('status', 'Y')->get(['id', 'title']);
        // $category = $category->map(function ($cat) {
        //     $cat->post_count = Blogmodel::where('category', $cat->id)->where('status', 'Y')->count();
        //     return $cat;
        // });
        // $category = DB::table('category')->where('type', 'blogs')->where('status', 'Y')->get(['id', 'title']);
        return view('front.blogsingle');
    }

    public function comment(Request $request)
    {
        if ($request->post()) {
            $comment = new Comment;
            $comment->name = $request->name;
            $comment->email = $request->email;
            $comment->url = $request->url;
            $comment->comment = $request->comment;
            $comment->save();
        }
        return redirect()->back();
    }
    public function blog()
    {
        $aboutus = Info::where('id', 7)->first();

        // Make sure $aboutus exists (i.e., a record with id 7 was found)
        if (!$aboutus) {
            // Handle the case if no data is found (optional)
            return redirect()->back()->with('error', 'About Us data not found.');
        }

        $info_one = json_decode($aboutus->info_one);
        if (isset($_GET['category']) && !empty($_GET['category'])) {
            $blog = Blogmodel::with('get_Category')
                ->where('status', 'Y')
                ->where('category', $_GET['category'])
                ->get();
        } else {
            $blog = Blogmodel::with('get_Category')
                ->where('status', 'Y')
                ->get();
        }

        $category = DB::table('category')->where('type', 'blogs')->where('status', 'Y')->get(['id', 'title']);
        $category = $category->map(function ($cat) {
            $cat->post_count = Blogmodel::where('category', $cat->id)->where('status', 'Y')->count();
            return $cat;
        });

        // $category = DB::table('category')->where('type', 'blogs')->where('status', 'Y')->get(['id', 'title']);
        return view('front.blog', compact('blog', 'category', 'aboutus', 'info_one'));
    }

    // public function blogsingle($slug,Request $request){
    //     $row = Blogmodel::where('slug',$slug)->first();
    //     if ($row) {

    //     $recentblogs = Blogmodel::where('status','Y')->orderBy('id','desc')->take(3)->select(['title','slug','short_description','banner','created_at'])->get();


    //         $comments = Blogcomments::where('blog_id',$row->id)->get();

    //         if ($request->method() == "POST") {
    //             $validatedData = $request->validate([
    //                 'name' => ['required'],
    //                 'email' => ['required','email'],
    //                 'message' => ['required'],
    //             ]);
    //             $comments = new Blogcomments;
    //             $comments->name = $request->name;
    //             $comments->blog_id = $row->id;
    //             $comments->email = $request->email;
    //             $comments->message = $request->message;
    //             $comments->save();
    //             return redirect()->back()->with('success','Comment on this post has been successful');
    //         }

    //     return view('front.blogsingle',compact('row','comments','recentblogs'));
    //     }else{
    //         abort(404);
    //     }
    // }

    public function events()
    {
        return view('front.events');
    }



    public function courses()
    {
        return view('front.courses');
    }
    public function coursesdetails()
    {
        return view('front.coursesdetails');
    }

    public function testimonials()
    {
        return view('front.testimonials');
    }

    public function volunteer()
    {
        return view('front.volunteer');
    }

    public function error()
    {
        return view('front.error');
    }

    // public function services()
    // {
    //     $service = Service::where('status', 'Y')->get();
    //     return view('services', compact('service'));
    // }

    public function servicesdetails($slug)
    {
        $Testimonials = Testimonials::where('status', 'Y')->get();
        $category = DB::table('category')->where('type', 'service')->where('status', 'Y')->get(['id', 'title']);
        $services = Service::with('get_Category')->where('slug', $slug)->where('status', 'Y')->firstOrFail();
        return view('front.services-details', compact('services', 'category', 'Testimonials'));
    }


    public function services()
    {


        if (isset($_GET['category']) && !empty($_GET['category'])) {
            $service = Service::with('get_Category')
                ->where('status', 'Y')
                ->where('category', $_GET['category'])
                ->get();
        } else {
            $service = service::with('get_Category')
                ->where('status', 'Y')
                ->get();
        }
        $Pagesetting = Pagesetting::where('id', 3)->first();
        $category = DB::table('category')->where('type', 'service')->where('status', 'Y')->get(['id', 'title']);
        return view('front.services', compact('service', 'category', 'Pagesetting'));
    }

    public function faq()
    {
        // $data = Faq::where('status', 'Y')->orderBy('id', 'desc')->get();
        $Faq = Faq::where('status', 'Y')->get();
        return view('front.faq', compact('Faq'));
    }

    public function privacypolicy()
    {

        return view('front.privacy-policy');
    }

    public function termsandconditions()
    {

        return view('front.terms-and-conditions');
    }

    public function teams()
    {
        $team = Team::where('status', 'Y')->orderBy('id', 'desc')->get();
        return view('front.teams', compact('team'));
    }

    public function partner()
    {
        return view('front.partner');
    }
}
