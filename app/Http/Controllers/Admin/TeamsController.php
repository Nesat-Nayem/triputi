<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\Gallery;
use App\Models\Videos;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamsController extends Controller
{
    public function team(){
        $data = Team::get();
        return view('admin.teams.index', compact('data'));
    }

    public function create(Request $request)
    {
        // Check if the form is submitted via POST method
        if ($request->isMethod('post')) {

            // $validated = $request->validate([
            //     'name' => 'required',
            //     'email' => 'required',
            //     'sub_title' => 'required',
            //     'phone' => 'nullable',
            //     'description' => 'nullable',
            //     'address' => 'nullable',
            //     'facebook' => 'nullable',
            //     'twitter' => 'nullable',
            //     'instagram' => 'nullable',
            //     'status' => 'required|in:Y,N',
            //     'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);


            $team = new Team();
            $team->slug = Str::slug($request->name);
            $team->name = $request->name;
            $team->sub_title = $request->sub_title;
            $team->status = $request->status;
            $team->phone = $request->phone;
            $team->email = $request->email;
            $team->experience = $request->experience;
            $team->address = $request->address;
            $team->since = $request->since;
            $team->description = $request->description;
            $team->facebook = $request->facebook;
            $team->twitter = $request->twitter;
            $team->instagram = $request->instagram;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('/team-image'), $imageName);
                $team->image = $imageName;
            }
            $team->save();

            return redirect('/admin/team')->with('success', 'Created Successfully');
        }
        return view('admin.teams.add');
    }
    public function editteam(Request $request, $id)
    {
        $team = Team::find($id);

        if ($request->post()) {
            // $validatedData = $request->validate([
            //     'name' => ['required'],
            //     'destination' => ['required'],
            //     'image' => ['mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            // ]);
            $team->slug = Str::slug($request->name);
            $team->name = $request->name;
            $team->sub_title = $request->sub_title;
            $team->status = $request->status;
            $team->phone = $request->phone;
            $team->email = $request->email;
            $team->experience = $request->experience;
            $team->address = $request->address;
            $team->since = $request->since;
            $team->description = $request->description;
            $team->facebook = $request->facebook;
            $team->twitter = $request->twitter;
            $team->instagram = $request->instagram;
            $slug = Str::slug($request->name);
            if (Team::where('slug', $slug)->where('id', '!=', $team->id)->exists()) {
                $slug = $slug . '-' . uniqid();
            }

            $team->slug = $slug;

            if ($request->hasFile('image')) {
                if ($team->image && file_exists(public_path('team-image/' . $team->image))) {
                    unlink(public_path('team-image/' . $team->image));  // Delete the old image
                }
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('team-image'), $imageName);
                $team->image = $imageName;
            }
            $team->save();
            return redirect('/admin/team')->with('success', 'Updated Successfully');
        }
        return view('admin.teams.edit', compact('team'));
    }


    public function deleteteam(Request $request, $id)
    {
        $faq = Team::find($id);
        $faq->delete();

        return redirect()->route('team')->with('success', 'Delete Successfully');
    }


    public function gallery(){
        $gallery = Gallery::get();
        return view('admin.gallery.index', compact('gallery'));
    }

    public function create_gallery(Request $request){
        if ($request->isMethod('post')) {

            $gallery = new Gallery();
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('/uploads'), $imageName);
                $gallery->image = $imageName;
            }
            $gallery->save();

            return redirect('/admin/gallery')->with('success', 'Created Successfully');
        }
        return view('admin.gallery.add');
    }


    public function galleryedit(Request $request, $id){
        $gallery = Gallery::find($id);
        if ($request->post()) {
            if ($request->hasFile('image')) {
                if ($gallery->image && file_exists(public_path('uploads/' . $gallery->image))) {
                    unlink(public_path('uploads/' . $gallery->image));  // Delete the old image
                }
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads'), $imageName);
                $gallery->image = $imageName;
            }
            $gallery->save();
            return redirect('/admin/gallery')->with('success', 'Updated Successfully');
        }
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function status_gallery_change($id){
        $gallery = Gallery::find($id);
        if ($gallery->status == "Y") {
            $gallery->status = "N";
        }else{
            $gallery->status = "Y";
        }
        $gallery->save();  
        return redirect()->back();
    }


    // COURESS

    public function course(){
        $course = Courses::get();
        return view('admin.courses.index', compact('course'));
    }


    public function create_course(Request $request){
        if ($request->isMethod('post')) {
            $courses = new Courses();
            $courses->title = $request->title;
            $courses->title_2 = $request->title_2;
            $courses->save();

            return redirect('/admin/course')->with('success', 'Created Successfully');
        }
        return view('admin.courses.add');
    }

    public function courseedit($id,Request $request){
        $courses = Courses::find($id);
        if ($request->isMethod('post')) {
            $courses->title = $request->title;
            $courses->title_2 = $request->title_2;
            $courses->save();
            return redirect('/admin/course')->with('updated!', 'Created Successfully');
        }
        return view('admin.courses.edit',compact('courses'));
    }


    public function status_course_change($id){
        $courses = Courses::find($id);
        if ($courses->status == "Y") {
            $courses->status = "N";
        }else{
            $courses->status = "Y";
        }
        $courses->save();  
        return redirect()->back();
    }

    // video

    public function video(){
        $video = Videos::get();
        return view('admin.videos.index', compact('video'));
    }
    public function create_video(Request $request){
        if ($request->isMethod('post')) {
            $video = new Videos();
            $video->video_url = $request->video_url;
            $video->save();

            return redirect('/admin/video')->with('success', 'Created Successfully');
        }
        return view('admin.videos.add');
    }

    public function videoedit($id,Request $request){
        $video = Videos::find($id);
        if ($request->isMethod('post')) {
            $video->video_url = $request->video_url;
            $video->save();
            return redirect('/admin/video')->with('updated!', 'Created Successfully');
        }
        return view('admin.videos.edit',compact('video'));
}

public function status_video_change($id){
    $video = Videos::find($id);
    if ($video->status == "Y") {
        $video->status = "N";
    }else{
        $video->status = "Y";
    }
    $video->save();  
    return redirect()->back();
}
}
