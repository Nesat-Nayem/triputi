<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Events;
use App\Models\Faq;
use App\Models\Fenquiry;
use App\Models\Franchise;
use App\Models\Info;
use App\Models\Booking;
use Illuminate\Support\Str;
use App\Models\Pagesetting;
use App\Models\Partner;
use App\Models\User;
use App\Models\PlacementEnq;
use App\Models\ProjectModel;
use App\Models\Team;
use App\Models\Testimonials;
use App\Models\Insttue;
use App\Models\Banners;
use App\Models\Amount;
use App\Models\Packages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Raw;
use Illuminate\Support\Facades\Hash;


class Pagecontroller extends Controller
{


    public function newaccess(Request $request){
        if($request->method() == "POST"){
            $new = new User;
            $new->name = $request->name;
            $new->phone = $request->phone;
            $new->email = $request->email;
            $new->role = 'team';
            $new->role_type = $request->role_type;
            $new->password =  Hash::make($request->password);
            $new->codeid =  $request->password;
            $new->is_block =  $request->status;
            $new->save();
            return redirect('/admin/access-management')->with('success','Created Successfully');
        }
        return view('admin.access.add');
    }

    public function editaccessmanagement(Request $request,$id){
        if($request->method() == "POST"){
            $new = User::findorfail($id);
            $new->name = $request->name;
            $new->phone = $request->phone;
            $new->email = $request->email;
            $new->role = 'team';
            $new->role_type = $request->role_type;
            $new->password =  Hash::make($request->password);
            $new->codeid =  $request->password;
            $new->is_block =  $request->status;
            $new->save();
            return redirect('/admin/access-management')->with('success','Created Successfully');
        }
        $row = User::findorfail($id);
        return view('admin.access.edit',compact('row'));
    }

    public function accessmanagement(Request $request){
        $data = User::where('role','team')->latest()->select(['name','email','phone','role_type','id','is_block','codeid'])->get();
        return view('admin.access.list',compact('data'));
    }


    public function counteradd(Request $request){
        if ($request->method() == "POST") {
            $validatedData = $request->validate([
                'number1' => ['required'],
                'number2' => ['required'],
                'number3' => ['required'],
                'number4' => ['required'],
            ]);
            $counters = [
                'number1' => $request->number1,
                'number2' => $request->number2,
                'number3' => $request->number3,
                'number4' => $request->number4,
            ];
            $new = Info::find(16);
            if (!$new) {
                $new = new Info;  // Create a new instance if not found
                $new->id = 16;  // Assign the ID manually, ensuring it doesn't conflict with auto-increment
            }
            $new->info_one = json_encode($counters);
            $new->save();
        }
        $counters = Info::find(16);
        $row1233 = $counters ? json_decode($counters->info_one) : null;
        return view('admin.counters.add', compact('counters', 'row1233'));
    }
    public function EagleConstruction(Request $request)
    {
        if ($request->method() == "POST") {
            $validatedData = $request->validate([
                'title' => ['required'],
                'desc' => ['required'],
                'subtitle' => ['required'],
                'image' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],  // Validate image type and size
                'favicon' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],  // Validate image type and size
            ]);
            $EagleConstruction = [
                'title' => $request->title,
                'desc' => $request->desc,
                'subtitle' => $request->subtitle,

            ];
            $new = Info::find(15);
            if (!$new) {
                $new = new Info;  // Create a new instance if not found
                $new->id = 15;  // Assign the ID manually, ensuring it doesn't conflict with auto-increment
            }
            $new->info_one = json_encode($EagleConstruction);
            if ($request->hasFile('image')) {
                $new->image = updateImage($request->file('image'), $new, 'image');
            }
            if ($request->hasFile('favicon')) {
                $new->favicon = updateImage($request->file('favicon'), $new, 'favicon');
            }
            $new->save();
        }
        $EagleConstruction = Info::find(15);
        $row12 = $EagleConstruction ? json_decode($EagleConstruction->info_one) : null;
        return view('admin.EagleConstruction.add', compact('EagleConstruction', 'row12'));
    }

    public function workingadd(Request $request)
    {
        if ($request->method() == "POST") {
            $validatedData = $request->validate([
                'title' => ['required'],
                'desc' => ['required'],
                'subtitle' => ['required'],
                'title1' => ['required'],
                'desc1' => ['required'],
                'image' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],  // Validate image type and size
            ]);
            $work_data = [
                'title' => $request->title,
                'desc' => $request->desc,
                'subtitle' => $request->subtitle,
                'title1' => $request->title1,
                'desc1' => $request->desc1,
            ];
            $new = Info::find(14);
            if (!$new) {
                $new = new Info;  // Create a new instance if not found
                $new->id = 14;  // Assign the ID manually, ensuring it doesn't conflict with auto-increment
            }
            $new->info_one = json_encode($work_data);
            if ($request->hasFile('image')) {
                $new->image = updateImage($request->file('image'), $new, 'image');
            }
            $new->save();
        }
        $work_data = Info::find(14);
        $row12 = $work_data ? json_decode($work_data->info_one) : null;
        return view('admin.working.add', compact('work_data', 'row12'));
    }



    public function skillsadd(Request $request)
    {
        if ($request->method() == "POST") {
            // Validate input data
            // $validatedData = $request->validate([
            //     'title_1' => ['required'],
            //     'desc_1' => ['required'],
            //     'btn_1' => ['required'],
            //     'image' => ['required|image'],  // Validate image (required and must be an image)

            //     'title_2' => ['required'],
            //     'desc_2' => ['required'],
            //     'btn_2' => ['required'],
            //     'btnurl_2' => ['required'],

            //     'title_3' => ['required'],
            //     'desc_3' => ['required'],
            //     'btn_3' => ['required'],
            //     'btnurl_3' => ['required'],
            // ]);

            // Prepare data for each Welcome Box
            $data1 = [
                'title' => $request->title_1,
                'desc' => $request->desc_1,
                // 'btn' => $request->btn_1,
                'image' => $request->hasFile('image') ? $this->uploadImage($request->file('image')) : null, // handle image upload
            ];

            $data2 = [
                'title' => $request->title_2,
                'desc' => $request->desc_2,
                'btn' => $request->btn_2,
                'btnurl' => $request->btnurl_2,
            ];

            $data3 = [
                'title' => $request->title_3,
                'desc' => $request->desc_3,
                'btn' => $request->btn_3,
                'btnurl' => $request->btnurl_3,
            ];

            $welcomeBox1 = Info::find(11);
            if ($welcomeBox1) {
                $welcomeBox1->info_one = json_encode($data1);
                $welcomeBox1->save();
            } else {
                $welcomeBox1 = new Info;
                $welcomeBox1->id = 11;
                $welcomeBox1->info_one = json_encode($data1);
                $welcomeBox1->save();
            }

            $welcomeBox2 = Info::find(12);
            if ($welcomeBox2) {
                $welcomeBox2->info_one = json_encode($data2);
                $welcomeBox2->save();
            } else {
                $welcomeBox2 = new Info;
                $welcomeBox2->id = 12;
                $welcomeBox2->info_one = json_encode($data2);
                $welcomeBox2->save();
            }
            $welcomeBox3 = Info::find(13);
            if ($welcomeBox3) {
                $welcomeBox3->info_one = json_encode($data3);
                $welcomeBox3->save();
            } else {
                $welcomeBox3 = new Info;
                $welcomeBox3->id = 13;
                $welcomeBox3->info_one = json_encode($data3);
                $welcomeBox3->save();
            }

             return redirect()->back()->with('success','Successfully Updated');
        }
        $data1 = Info::find(11);
        $row1 = $data1 ? json_decode($data1->info_one) : null;

        $data2 = Info::find(12);
        $row2 = $data2 ? json_decode($data2->info_one) : null;

        $data3 = Info::find(13);
        $row3 = $data3 ? json_decode($data3->info_one) : null;

        return view('admin.skills.add', compact('data1', 'row1', 'data2', 'row2', 'data3', 'row3'));
    }

    public function uploadImage($image)
    {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);
        return 'uploads/' . $imageName;
    }


    public function home_banners(){
        $data = Banners::orderBy('id', 'desc')->get();
        return view('admin.banners.index', compact('data'));
    }


    public function banners_delete($id){
        $data = Banners::find($id);
        if ($data->image) {
            $imagePath = public_path('uploads/' . $data->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);  // Delete the image file
            }
        }
        $data->delete();
        return redirect('admin/home-banners')->with('success', ' deleted successfully');
    }

    public function banners_status($id){
        $data = Banners::find($id);
        if ($data->status == "Y") {
            $data->status = "N";
        }else{
            $data->status = "Y";
        }
        $data->save();  
        return redirect()->back();
    }

    public function homeadd(Request $request)
    {
        if ($request->method() == "POST") {
            // Validate input data
            $validatedData = $request->validate([
                'title_1' => ['required'],
                'desc_1' => ['required'],
                'btn_1' => ['required'],
                'btnurl_1' => ['required'],

                'title_2' => ['required'],
                'desc_2' => ['required'],
                'btn_2' => ['required'],
                'btnurl_2' => ['required'],

                'title_3' => ['required'],
                'desc_3' => ['required'],
                'btn_3' => ['required'],
                'btnurl_3' => ['required'],
            ]);

            // Prepare data for each Welcome Box
            $data1 = [
                'title' => $request->title_1,
                'desc' => $request->desc_1,
                'btn' => $request->btn_1,
                'btnurl' => $request->btnurl_1,
            ];

            $data2 = [
                'title' => $request->title_2,
                'desc' => $request->desc_2,
                'btn' => $request->btn_2,
                'btnurl' => $request->btnurl_2,
            ];

            $data3 = [
                'title' => $request->title_3,
                'desc' => $request->desc_3,
                'btn' => $request->btn_3,
                'btnurl' => $request->btnurl_3,
            ];

            // Save Welcome Box 1 (ID 8)
            $welcomeBox1 = Info::find(8);
            if ($welcomeBox1) {
                $welcomeBox1->info_one = json_encode($data1);
                $welcomeBox1->save();
            } else {
                $welcomeBox1 = new Info;
                $welcomeBox1->id = 8;
                $welcomeBox1->info_one = json_encode($data1);
                $welcomeBox1->save();
            }

            // Save Welcome Box 2 (ID 9)
            $welcomeBox2 = Info::find(9);
            if ($welcomeBox2) {
                $welcomeBox2->info_one = json_encode($data2);
                $welcomeBox2->save();
            } else {
                $welcomeBox2 = new Info;
                $welcomeBox2->id = 9;
                $welcomeBox2->info_one = json_encode($data2);
                $welcomeBox2->save();
            }

            // Save Welcome Box 3 (ID 10)
            $welcomeBox3 = Info::find(10);
            if ($welcomeBox3) {
                $welcomeBox3->info_one = json_encode($data3);
                $welcomeBox3->save();
            } else {
                $welcomeBox3 = new Info;
                $welcomeBox3->id = 10;
                $welcomeBox3->info_one = json_encode($data3);
                $welcomeBox3->save();
            }

             return redirect()->back()->with('success','Successfully Updated');


        }

        // Retrieve data for each Welcome Box
        $data1 = Info::find(8);
        $row1 = $data1 ? json_decode($data1->info_one) : null;

        $data2 = Info::find(9);
        $row2 = $data2 ? json_decode($data2->info_one) : null;

        $data3 = Info::find(10);
        $row3 = $data3 ? json_decode($data3->info_one) : null;

        return view('admin.welcomebox.add', compact('data1', 'row1', 'data2', 'row2', 'data3', 'row3'));

    }

    public function createbanner(Request $request){
        if ($request->method() == "POST") {
            // $validated = $request->validate([
            //     'title' => 'required',
            //     'description' => 'required',
            //     'link' => 'required',
            //     'image' => 'required', 'mimes:jpeg,png,jpg,gif,svg', 'max:3048',
            // ]);
            $new = new Banners;
            $new->title = $request->title;
            $new->description = $request->description;
            $new->link = $request->link;
            if ($request->image) {
                $new->image = uploadImage($request->image, $new, 'image');
            }
            $new->save();
            return redirect('admin/home-banners')->with('success', 'Created Successfully');
        }
        return view('admin.banners.add');
    }




    public function bannersedit(Request $request, $id)
    {
        $row = Banners::findorfail($id);

        if ($request->method() == "POST") {
            // $validatedData = $request->validate([
            //     'title' => ['required'],
            //     'description' => ['required'],
            //     'link' => ['required'],
            //     'image' => ['mimes:jpeg,png,jpg,gif,svg', 'max:3048'],
            // ]);

            $row->title = $request->title;
            $row->description = $request->description;
            $row->link = $request->link;
            if ($request->image) {
                $row->image = updateImage($request->image, $row, 'image');
            }
            $row->save();
            return redirect('admin/home-banners')->with('success', 'Update Successfully');
        }
        return view('admin.banners.edit', compact('row'));
    }


    public function seomanagement()
    {
        $data = Pagesetting::orderBy('id', 'desc')->paginate(10);
        return view('admin.page-setting.index', compact('data'));
    }

    public function deletepage($id)
    {
        $daata = Pagesetting::find($id);
        if ($daata->image) {
            $imagePath = public_path('uploads/' . $daata->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);  // Delete the image file
            }
        }
        $daata->delete();
        return redirect('/admin/seo-management')->with('success', ' deleted successfully');
    }

    public function newpage(Request $request)
    {

        if ($request->method() == "POST") {
            // $validatedData = $request->validate([
            //     'title' => ['required'],
            //     // 'short_description' => ['required'],
            //     'meta' => ['required'],
            //     'tag' => ['required'],
            //     'meta_d' => ['required'],
            //     'image' => ['required', 'mimes:jpeg,png,jpg,gif,svg', 'max:3048'],
            // ]);

            $newpage = new Pagesetting;
            $newpage->title = $request->title;
            $newpage->slug = Str::slug($request->title);
            $newpage->pagename = $request->pagename;
            $newpage->bradcump_title = $request->bradcump_title;
            $newpage->description = $request->description;
            $newpage->meta = $request->meta;
            $newpage->tag = $request->tag;
            $newpage->meta_d = $request->meta_d;
            $newpage->status = $request->status;

            if ($request->image) {
                $newpage->image = uploadImage($request->image, $newpage, 'image');
            }
            $newpage->save();
            return redirect('/admin/seo-management')->with('success', 'Created Successfully');
        }

        return view('admin.page-setting.add');
    }

    public function editpage(Request $request, $id)
    {
        $newpage = Pagesetting::findOrFail($id);
        if ($request->method() == "POST") {
            // $validatedData = $request->validate([
            //     'title' => ['required'],
            //     // 'short_description' => ['required'],
            //     'meta_title' => ['required'],
            //     'meta_tags' => ['required'],
            //     'meta_description' => ['required'],
            //     'banner' => ['mimes:jpeg,png,jpg,gif,svg', 'max:3048'],
            // ]);


            $newpage->title = $request->title;
            $newpage->pagename = $request->pagename;
            $newpage->bradcump_title = $request->bradcump_title;
            $newpage->description = $request->description;
            $newpage->meta = $request->meta;
            $newpage->tag = $request->tag;
            $newpage->meta_d = $request->meta_d;
            $newpage->status = $request->status;
            $slug = Str::slug($request->title);
            if (Pagesetting::where('slug', $slug)->where('id', '!=', $newpage->id)->exists()) {
                $slug = $slug . '-' . uniqid();
            }

            $newpage->slug = $slug;

            if ($request->image) {
                $newpage->image = updateImage($request->image, $newpage, 'image');
            }
            $newpage->save();
            return redirect('/admin/seo-management')->with('success', 'Update Successfully');
        }


        return view('admin.page-setting.edit', compact('newpage'));
    }

    public function franchise(Request $request)
    {

        if ($request->method() == "POST") {
            $validatedData = $request->validate([
                'title' => ['required'],
                'description' => ['required'],
                'total_franchise' => ['required', 'numeric'],
                'total_staff' => ['required', 'numeric'],
                'placed_student' => ['required', 'numeric'],
                'b_title' => ['required'],
                'b_description' => ['required'],
                'meta_title' => ['required'],
                'meta_tags' => ['required'],
                'meta_description' => ['required'],
                'image' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            ]);

            $data = [
                'title' => $request->title,
                'description' => $request->description,
                'total_franchise' => $request->total_franchise,
                'total_staff' => $request->total_staff,
                'placed_student' => $request->placed_student,
                'b_title' => $request->b_title,
                'b_description' => $request->b_description,
                'meta_title' => $request->meta_title,
                'meta_tags' => $request->meta_tags,
                'meta_description' => $request->meta_description,
            ];

            $new = Info::find(4);
            $new->info_one = json_encode($data);
            if ($request->image) {
                $new->image = updateImage($request->image, $new, 'image');
            }
            $new->save();
            return redirect()->back()->with('success', 'Updated Successfully');
        }
        $data = Info::findOrFail(4);
        $row = json_decode($data->info_one);
        return view('superadmin.franchise', compact('row', 'data'));
    }


    public function partners()
    {
        $data = Partner::orderBy('id', 'desc')->paginate(10);
        return view('superadmin.partners.index', compact('data'));
    }

    public function new_partner(Request $request)
    {
        if ($request->method() == "POST") {
            $validatedData = $request->validate([
                'title' => ['required'],
                'image' => ['required', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            ]);

            $partner = new Partner;
            $partner->title = $request->title;

            if ($request->image) {
                $partner->image = uploadImage($request->image, $partner, 'image');
            }
            $partner->save();
            return redirect('/admin/partners')->with('success', 'Created Successfully');
        }
        return view('superadmin.partners.add');
    }

    public function editpartners(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);
        if ($request->method() == "POST") {
            $validatedData = $request->validate([
                'title' => ['required'],
                'image' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            ]);
            $partner->title = $request->title;
            if ($request->image) {
                $partner->image = updateImage($request->image, $partner, 'image');
            }
            $partner->save();
            return redirect('/admin/partners')->with('success', 'Update Successfully');
        }
        return view('superadmin.partners.edit', compact('partner'));
    }




    public function terms(Request $request){
        if ($request->method() == "POST") {
            $new = Info::find(1);
            $new->info_one = $request->terms_and_condition;
            $new->save();
            return redirect()->back()->with('success', 'Updated Successfully');
        }
        $data = Info::find(1);
        return view('superadmin.pages.terms', compact('data'));
    }

    public function editplacements(Request $request)
    {
        if ($request->method() == "POST") {

            $validatedData = $request->validate([
                'title' => ['required'],
                'description' => ['required'],
                'meta_title' => ['required'],
                'yt_links' => ['required'],
                'meta_tags' => ['required'],
                'meta_description' => ['required'],
                'image' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
                'image_2' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            ]);

            $data = [
                'title' => $request->title,
                'description' => $request->description,
                'yt_links' => $request->yt_links,
                'meta_title' => $request->meta_title,
                'meta_tags' => $request->meta_tags,
                'meta_description' => $request->meta_description,
            ];

            $new = Info::find(6);
            $new->info_one = json_encode($data);
            if ($request->image) {
                $new->image = updateImage($request->image, $new, 'image');
            }
            if ($request->image_2) {
                $new->image_2 = updateImage($request->image_2, $new, 'image_2');
            }
            $new->save();
            return redirect()->back()->with('success', 'Updated Successfully');
        } else {

            $new = Info::find(6);
            $row = json_decode($new->info_one);

            return view('superadmin.placements.placements', compact('row', 'new'));
        }
    }

    public function genralsetting(Request $request){
        if ($request->method() == "POST") {
            $data = Info::find(5);
            $validatedData = $request->validate([
                'phone' => ['required', 'numeric'],
                // 'phone_2' => ['required', 'numeric'],
                'email' => ['required', 'email'],
                'location' => ['required'],
                'location_iframe' => ['required'],
                'image' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
                'favicon' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
                'meta_title' => ['required'],
                'meta_tags' => ['required'],
                'meta_description' => ['required'],
            ]);

            $info = [
                'phone' => $request->phone,
                // 'phone_2' => $request->phone_2,
                'email' => $request->email,
                'location' => $request->location,
                'location_iframe' => $request->location_iframe,
                'meta_title' => $request->meta_title,
                'meta_tags' => $request->meta_tags,
                'meta_description' => $request->meta_description,
                'twitter' => $request->twitter,
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
                'youtube' => $request->youtube,
                'instagram' => $request->instagram,
                'skype' => $request->skype,
            ];

            $data->info_one = json_encode($info);
            if ($request->image) {
                $data->image = updateImage($request->image, $data, 'image');
            }

            if ($request->favicon) {
                $data->favicon = updateImage($request->favicon, $data, 'favicon');
            }

            $data->save();
            return redirect()->back()->with('success', 'Successfully Updated');
        }

        $data = DB::table('webinfo')->where('id', 5)->select(['image', 'favicon', 'info_one'])->first();
        $row = json_decode($data->info_one);
        return view('admin.genralsetting',compact('data','row'));
    }

    public function aboutus(Request $request){
        if ($request->method() == "POST") {
          $validatedData = $request->validate([
                'title' => ['required'],
                'desc' => ['required'],
                'title_2' => ['required'],
                'desc_2' => ['required'],
                'meta_title' => ['required'],
                'meta_tags' => ['required'],
                'meta_description' => ['required'],
                'image' => ['mimes:jpeg,jpg,png,gif,avif|required'],
                'image_2' => ['mimes:jpeg,jpg,png,gif,avif|required'],
            ]);

            $data = [
                'title' => $request->title,
                'desc' => $request->desc,
                'title_2' => $request->title_2,
                'desc_2' => $request->desc_2,
                'meta_title' => $request->meta_title,
                'meta_tags' => $request->meta_tags,
                'meta_description' => $request->meta_description,
            ];

            $new = Info::find(7);
            $new->info_one = json_encode($data);
            if ($request->image) {
                $new->image = updateImage($request->image, $new, 'image');
            }

            if ($request->image_2) {
                $new->image_2 = updateImage($request->image_2, $new, 'image_2');
            }
            $new->save();
            return redirect()->back()->with('success', 'Updated Successfully');
        }
        $data = Info::find(7);
        $row = json_decode($data->info_one);
        return view('admin.about.add',compact('data','row'));
    }

    public function privacypolicy(Request $request){
        if ($request->method() == "POST") {
            $new = Info::find(2);
            $new->info_one = $request->privacy_policy;
            $new->save();
            return redirect()->back()->with('success', 'Updated Successfully');
        }
        $data = Info::find(2);
        return view('superadmin.pages.privacypolicy', compact('data'));
    }

    public function testimonials(){
        $data = Testimonials::get();
        return view('admin.testimonials.index', compact('data'));
    }


    public function change_testimonials_status($id){
        $data = Testimonials::find($id);
        if ($data->status == "Y") {
            $data->status = "N";
        }else{
            $data->status = "Y";
        }
        $data->save();  
        return redirect()->back();
    }
    public function createtestimonials(Request $request){
        if ($request->method() == "POST") {
            $validated = $request->validate([
                'name' => 'required',
                'destination' => 'required',
                'image' => 'required', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048',
            ]);

            $user = new Testimonials;
            $user->name = $request->name;
            $user->destination = $request->destination;
            $user->description = $request->description;
            if ($request->image) {
                $user->image = uploadImage($request->image, $user, 'image');
            }
            $user->save();
            return redirect('/admin/testimonials')->with('success', 'Created Successfully');
        }
        return view('admin.testimonials.createtestimonials');
    }

    public function deletetestimonials($id)
    {
        $testimonial = Testimonials::find($id);
        if ($testimonial->image) {
            $imagePath = public_path('uploads/' . $testimonial->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);  // Delete the image file
            }
        }
        $testimonial->delete();
        return redirect('/admin/testimonials')->with('success', 'Testimonial deleted successfully');
    }

    public function edittestimonials(Request $request, $id)
    {
        $row = Testimonials::find($id);

        if ($request->method() == "POST") {
            // Validate the form fields
            // $validatedData = $request->validate([
            //     'name' => ['required'],
            //     'destination' => ['required'],
            //     'description' => ['required'],
            //     'status' => ['required'], // Validate that status is set
            //     'image' => ['nullable', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            // ]);

            // Update the fields
            $row->name = $request->name;
            $row->destination = $request->destination;
            $row->description = $request->description;

            // If a new image is uploaded, handle the image update
            if ($request->image) {
                $row->image = updateImage($request->image, $row, 'image');
            }

            $row->save(); // Save the updated testimonial data
            return redirect('/admin/testimonials')->with('success', 'Updated Successfully');
        }

        // Return the edit form with the current testimonial data
        return view('admin.testimonials.edittestimonials', compact('row'));
    }


    // public function aboutus(Request $request)
    // {

    //     $info_one = [
    //         'title' => $request->title,
    //         'subtitle' => $request->subtitle,
    //         'description' => $request->description,
    //     ];
    //     // image 2
    //     // sign... image
    //     // $image = [
    //     //     'title' => $request->title,

    //     // ];
    //     $new = Info::find(7);

    //     $new->info_one = json_encode($info_one);
    //     $new->save();
    //     return view('admin/about.add');
    // }

    // public function faq(Request $request)
    // {

    //     $data = Faq::orderBy('id', 'desc')->get();
    //     return view('superadmin.pages.faq', compact('data'));
    // }





    public function deleterow($table, $id, $image)
    {
        if ($image == "no_image") {
        } else {
            $image_path = public_path("uploads/" . $image);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        $table = DB::table($table)->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Data Successfully Deleted');
    }



    public function createinstitute(Request $request){
        if ($request->method() == "POST") {
            // $validated = $request->validate([
            //     'title' => 'required',
            //     'description' => 'required',
            //     'link' => 'required',
            //     'image' => 'required', 'mimes:jpeg,png,jpg,gif,svg', 'max:3048',
            // ]);
            $insttue = new Insttue;
            $insttue->title = $request->title;
            $insttue->desc = $request->desc;
            if ($request->icon) {
                $insttue->icon = uploadImage($request->icon, $insttue, 'icon');
            }
            $insttue->save();
            return redirect('admin/institute-list')->with('success', 'Created Successfully');
        }
        return view('admin.insttue.add');
    }


    public function institute_update($id,Request $request){
        $insttue = Insttue::find($id);
        if ($request->method() == "POST") {
            // $validated = $request->validate([
            //     'title' => 'required',
            //     'description' => 'required',
            //     'link' => 'required',
            //     'image' => 'required', 'mimes:jpeg,png,jpg,gif,svg', 'max:3048',
            // ]);
            $insttue->title = $request->title;
            $insttue->desc = $request->desc;
            
            if ($request->hasFile('icon')) {
                $insttue->image = updateImage($request->file('icon'), $insttue, 'icon');
            }
            $insttue->save();
            return redirect('admin/institute-list')->with('success', 'Created Successfully');
        }
        return view('admin.insttue.edit',compact('insttue'));

    }


    public function institute_list(){
        $insttue = Insttue::get();
        return view('admin.insttue.index', compact('insttue'));
    }


    public function institute_change_status($id){
        $insttue = Insttue::find($id);
        if ($insttue->status == "Y") {
            $insttue->status = "N";
        }else{
            $insttue->status = "Y";
        }
        $insttue->save();  
        return redirect()->back();
    }

    
    public function packages_list(){
        $package = Packages::get();
        return view('admin.package.index', compact('package'));
    }

    public function createpackages(Request $request){
        if ($request->method() == "POST") {
            // $validated = $request->validate([
            //     'title' => 'required',
            //     'description' => 'required',
            //     'link' => 'required',
            //     'image' => 'required', 'mimes:jpeg,png,jpg,gif,svg', 'max:3048',
            // ]);
            $package = new Packages;
            $package->title = $request->title;
            $package->sub_title = $request->sub_title;
            $package->desc = $request->desc;
            if ($request->image) {
                $package->image = uploadImage($request->image, $package, 'image');
            }
            $package->save();
            return redirect('admin/packages-list')->with('success', 'Created Successfully');
        }
        return view('admin.package.add');
    }

    public function packages_update($id,Request $request){
        $package = Packages::find($id);
        if ($request->method() == "POST") {
            // $validated = $request->validate([
            //     'title' => 'required',
            //     'description' => 'required',
            //     'link' => 'required',
            //     'image' => 'required', 'mimes:jpeg,png,jpg,gif,svg', 'max:3048',
            // ]);
            $package->title = $request->title;
            $package->sub_title = $request->sub_title;
            $package->desc = $request->desc;
            if ($request->image) {
                $package->image = uploadImage($request->image, $package, 'image');
            }
            $package->save();
            return redirect('admin/packages-list')->with('success', 'Updated Successfully');
        }
        return view('admin.package.edit',compact('package'));
   
    }

    public function packages_change_status($id){
        $package = Packages::find($id);
        if ($package->status == "Y") {
            $package->status = "N";
        }else{
            $package->status = "Y";
        }
        $package->save();  
        return redirect()->back();
    }


    // manager
    public function create_booking_manager(Request $request){
        if ($request->method() == "POST") {
            $booking = new Booking;
            $booking->will_sand = $request->will_sand;
            $booking->will_take = $request->will_take;
            $booking->date = $request->date;
            $booking->item_name = $request->item_name;
            $booking->category = $request->category;
            $booking->city = $request->city;
            $booking->area = $request->area;
            $booking->pincode = $request->pincode;
            $booking->qty = $request->qty;
            $booking->transportation_fare = $request->transportation_fare;
            $booking->filled_up = $request->filled_up;
            $booking->receipt_charge = $request->receipt_charge;
            $booking->we_attacked = $request->we_attacked;
            $booking->total = $request->total;
            $booking->status = $request->status;
            $booking->save();
            return redirect('/manager/bookin-list-manager')->with('success', 'Created Successfully');
        }
        return view('manager.booking.add');

    }


    public function bookin_list_manager(){
        $bookings = Booking::with('categoryRelation')->get();
        return view('manager.booking.index', compact('bookings'));
    }


    public function bookin_delete_manager($id){
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->back()->with('success','deleted! Done');
    }

    
    public function bookin_envoice_manager($id,Request $request){
        $booking = Booking::find($id);
        if ($request->method() == "POST") {
            $booking->will_sand = $request->will_sand;
            $booking->will_take = $request->will_take;
            $booking->date = $request->date;
            $booking->item_name = $request->item_name;
            $booking->category = $request->category;
            $booking->city = $request->city;
            $booking->area = $request->area;
            $booking->pincode = $request->pincode;
            $booking->qty = $request->qty;
            $booking->transportation_fare = $request->transportation_fare;
            $booking->filled_up = $request->filled_up;
            $booking->receipt_charge = $request->receipt_charge;
            $booking->we_attacked = $request->we_attacked;
            $booking->total = $request->total;
            $booking->status = $request->status;
            $booking->save();
            return redirect('/manager/bookin-list-manager')->with('success', 'Updated! Successfully');
        }
       
    }
    

    public function view_envoice_manager($id,Request $request){
        $booking = Booking::with('categoryRelation')->find($id); // Use `find` to fetch a single record
        return view('manager.booking.view_envoice',compact('booking'));
    }

//     public function getAmountByCityArea(Request $request)
// {
//     // Fetch amount based on city_id and area_id from the Amount table
//     $amount = Amount::where('category', $request->category_name)
//                     ->where('area_name', $request->area_id)
//                     ->first();

//     //                 return $request->all();
//     // //                 die;

//     // // // Check if the amount exists, if so return it, else return a default value
//     // // if ($amount) {
//     // //     return response()->json(['amount' => $amount->amount]);
//     // // } else {
//     // //     return response()->json(['amount' => 0]); // Return 0 or any default value
//     // // }
// }



    public function bookin_edit_manager($id,Request $request){
        $booking = Booking::find($id);
        if ($request->method() == "POST") {
            $booking->will_sand = $request->will_sand;
            $booking->will_take = $request->will_take;
            $booking->date = $request->date;
            $booking->item_name = $request->item_name;
            $booking->category = $request->category;
            $booking->city = $request->city;
            $booking->area = $request->area;
            $booking->pincode = $request->pincode;
            $booking->qty = $request->qty;
            $booking->transportation_fare = $request->transportation_fare;
            $booking->filled_up = $request->filled_up;
            $booking->receipt_charge = $request->receipt_charge;
            $booking->we_attacked = $request->we_attacked;
            $booking->total = $request->total;
            $booking->status = $request->status;
            $booking->save();
            return redirect('/manager/bookin-list-manager')->with('success', 'Updated! Successfully');
        }
        return view('manager.booking.edit',compact('booking'));
    }

    public function getBookingDetails($id)
{
    // Fetch the booking data with the related category
    $booking = Booking::with('categoryRelation')->find($id); // Use `find` to fetch a single record
    
    if ($booking) {
        return view('manager.booking.detail', compact('booking'));
    }

    return response()->json([
        'status' => 'error',
        'message' => 'Booking not found'
    ]);
}

    
}
