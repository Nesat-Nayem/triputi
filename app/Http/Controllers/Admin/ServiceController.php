<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use App\Models\Servicecategory;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function create(Request $request)
    {
        if ($request->post()) {
            $validated = $request->validate([
                'title' => 'required|',
                // 'description' => 'nullable|string',
                // 'long_description' => 'nullable|string',
                // 'image' => 'nullable|image|max:2048',
                // 'baner_img' => 'nullable|baner_img|',
            ]);
            $Service = new Service();
            $Service->title = $request->title;
            $Service->slug = Str::slug($request->title);
            $Service->category = $request->category;
            $Service->description = $request->description;
            $Service->video = $request->video;
            $Service->meta_title = $request->meta_title;
            $Service->meta_tags = $request->meta_tags;
            $Service->meta_description = $request->meta_description;
            if ($request->image) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('/Service-image'), $imageName);
                $Service->image = $imageName;
            }

            if ($request->icon) {
                $imageName = time() . '.' . $request->icon->extension();
                $request->icon->move(public_path('/Service-image'), $imageName);
                $Service->icon = $imageName;
            }

            if ($request->baner_img) {
                $imageName = time() . '.' . $request->baner_img->extension();
                $request->baner_img->move(public_path('/Service-Banner-image'), $imageName);
                $Service->baner_img = $imageName;
            }
            $Service->save();
            return redirect('admin/services-list')->with('success', 'Created Successfully');;
        }
        return View('admin/services/add');
    }


    public function index(){
        $Service = Service::get();
        return View('admin/services/index', compact('Service'));
    }


    public function services_status($id){
        $data = Service::find($id);
        if ($data->status == "Y") {
            $data->status = "N";
        }else{
            $data->status = "Y";
        }
        $data->save();  
        return redirect()->back();
    }


    public function update(Request $request, $id)
    {

        $service = Service::find($id);
        $categories = Servicecategory::where('status', 'Y')->get();

        if ($request->post()) {

            $service->title = $request->title;
            $service->slug = Str::slug($request->title);
            $service->category = $request->category;
            $service->description = $request->description;
            $service->video = $request->video;
            $service->meta_title = $request->meta_title;
            $service->meta_tags = $request->meta_tags;
            $service->meta_description = $request->meta_description;
          

            if ($request->hasFile('image')) {
                if ($service->image && file_exists(public_path('Service-image/' . $service->image))) {
                    unlink(public_path('Service-image/' . $service->image));  // Delete the old image
                }
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('Service-image'), $imageName);
                $service->image = $imageName;
            }


            if ($request->hasFile('icon')) {
                if ($service->icon && file_exists(public_path('Service-image/' . $service->icon))) {
                    unlink(public_path('Service-image/' . $service->icon));  // Delete the old image
                }
                $imageName = time() . '.' . $request->icon->extension();
                $request->icon->move(public_path('Service-image'), $imageName);
                $service->icon = $imageName;
            }

            if ($request->hasFile('baner_img')) {
                if ($service->baner_img && file_exists(public_path('Service-Banner-image/' . $service->baner_img))) {
                    unlink(public_path('Service-Banner-image/' . $service->baner_img));  // Delete the old image
                }
                $imageName = time() . '.' . $request->baner_img->extension();
                $request->baner_img->move(public_path('Service-Banner-image'), $imageName);
                $service->baner_img = $imageName;
            }
            $service->save();
            return redirect()->route('services-list')->with('success', 'Update Successfully');;
        }
        return view('admin.services.edit', compact('service', 'categories'));
    }


    public function delete(Request $request, $id)
    {
        $service = Service::find($id);
        if ($service->image) {
            unlink(public_path('Service-image/' . $service->image));
        }
        if ($service->baner_img) {
            unlink(public_path('Service-Banner-image/' . $service->baner_img));
        }

        if ($service->icon) {
            unlink(public_path('Service-Banner-image/' . $service->icon));
        }

        $service->delete();

        return redirect()->route('services-list')->with('success', 'Delete Successfully');;
    }
}
