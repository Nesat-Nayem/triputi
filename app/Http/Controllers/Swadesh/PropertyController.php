<?php

namespace App\Http\Controllers\Swadesh;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Reports;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Spatie\Permission\Models\Role;



class PropertyController extends Controller
{


    public function managerdashboard(){
        $todayReports = Reports::whereDate('created_at', Carbon::today())->count();
        return view("manager.dashboard",compact('todayReports'));
    }

 
  public function view_agent(){
        $agent_view = User::where('role','agent')->get();
        return view('admin.property.view_agent', compact('agent_view'));
    }

    public function view_builder(){
        $builder_view = User::where('role','builder')->get();
        return view('admin.property.builder_view', compact('builder_view'));
    }

    public function newproperty(Request $request){
        if ($request->method() == "POST") {
           $new = new Property;

           if (isset($request->thumbnail)){
           $file = $request->file('thumbnail');
           $monthYearFolder = 'property/' . strtolower(now()->format('M')) . now()->format('Y');
           $destinationPath = public_path($monthYearFolder);
           if (!is_dir($destinationPath)) {
               mkdir($destinationPath, 0755, true);
           }
           $fileName = Str::random(10) . '.' . $file->getClientOriginalExtension();
           $file->move($destinationPath, $fileName);

           $new->thumbnail = $monthYearFolder . '/' . $fileName;
        }

        if (isset($request->gallery) && is_array($request->gallery)) {
            $imagePaths = [];

            foreach ($request->file('gallery') as $file) {
                $monthYearFolder = 'property/' . strtolower(now()->format('M')) . now()->format('Y');
                $destinationPath = public_path($monthYearFolder);

                if (!is_dir($destinationPath)) {
                    mkdir($destinationPath, 0755, true);
                }

                $fileName = Str::random(10) . '.' . $file->getClientOriginalExtension();
                $file->move($destinationPath, $fileName);

                $imagePaths[] = $monthYearFolder . '/' . $fileName;
            }

            // Store the paths in JSON format without escaping slashes
            $new->gallery = json_encode($imagePaths, JSON_UNESCAPED_SLASHES);
        }



           // Return the image path
        //    $imagePath = $monthYearFolder . '/' . $fileName;

           $new->title = $request->title;
           $new->slug = Str::slug($request->title, '-');
           $new->purpose = $request->purpose;
           $new->price = $request->price;
           $new->user_id = Auth::user()->id;
           $new->arrea = $request->arrea;
           $new->amenity = json_encode($request->amenity);
           $new->bedrooms = $request->bedrooms;
           $new->bathrooms = $request->bathrooms;
           $new->property_type = $_GET['property_type'];

           if(($_GET['property_type'] == "land_plot")){
                $new->plot_category = $request->plot_category;
           }

           $new->location = $request->location;
           $new->furnished_status = $request->furnished_status;
           $new->construction_age = $request->construction_age;
           $new->status = $request->status;
           $new->property_description = $request->property_description;
           $new->category_type = $request->category_type;
           $new->additional_description = $request->additional_description;
           $new->meta_title = $request->meta_title;
           $new->meta_tags = $request->meta_tags;
           $new->meta_description = $request->meta_description;
           $new->save();
           return redirect('/admin/property-management-properties?property_type='.$_GET['property_type'].'')->with('success','Created Successfully');

        }
        if(isset($_GET['property_type']) && !empty($_GET['property_type'])){
        return view('admin.property.create');
    }else{
        return redirect('/admin/dashboard')->with('error','Invalid Url');
}
    }

    public function propertymanagementproperties(){

        if(isset($_GET['property_type']) && !empty($_GET['property_type'])){
            if (Auth::user()->role == "superadmin") {

            $data = Property::with('category')->where('property_type',$_GET['property_type'])->latest()->get();


        }else{
            $data = Property::with('category')->where('property_type',$_GET['property_type'])->where('user_id',Auth::user()->id)->latest()->get();
        }
            // $agent = Property::with('category')->where('property_type',$_GET['property_type'])->latest()->get();

            return view('admin.property.index',compact('data'));
        }else{
            return redirect('/admin/dashboard')->with('error','Invalid Url');
    }
    }

    public function editproperty(Request $request,$id){
        $row = Property::findorfail($id);
        if ($request->method() == "POST") {


            if (isset($request->thumbnail)){

                if ($row->thumbnail) {
                    $thumb_path = $row->thumbnail; // Decode the JSON to an array

                            if (File::exists($thumb_path)) { // Check if the file exists
                                File::delete($thumb_path); // Delete the file

                    }
                }



                $file = $request->file('thumbnail');
                $monthYearFolder = 'property/' . strtolower(now()->format('M')) . now()->format('Y');
                $destinationPath = public_path($monthYearFolder);
                if (!is_dir($destinationPath)) {
                    mkdir($destinationPath, 0755, true);
                }
                $fileName = Str::random(10) . '.' . $file->getClientOriginalExtension();
                $file->move($destinationPath, $fileName);

                $row->thumbnail = $monthYearFolder . '/' . $fileName;
             }



             if (isset($request->gallery) && is_array($request->gallery)) {

                if ($row->gallery) {
                    $galleryPaths = json_decode($row->gallery, true); // Decode the JSON to an array

                    if (is_array($galleryPaths)) {
                        foreach ($galleryPaths as $path) {
                            $filePath = public_path($path); // Construct the full file path

                            if (File::exists($filePath)) { // Check if the file exists
                                File::delete($filePath); // Delete the file
                            }
                        }
                    }
                }

                 $imagePaths = [];

                 foreach ($request->file('gallery') as $file) {
                     $monthYearFolder = 'property/' . strtolower(now()->format('M')) . now()->format('Y');
                     $destinationPath = public_path($monthYearFolder);

                     if (!is_dir($destinationPath)) {
                         mkdir($destinationPath, 0755, true);
                     }

                     $fileName = Str::random(10) . '.' . $file->getClientOriginalExtension();
                     $file->move($destinationPath, $fileName);

                     $imagePaths[] = $monthYearFolder . '/' . $fileName;
                 }

                 // Store the paths in JSON format without escaping slashes
                 $row->gallery = json_encode($imagePaths, JSON_UNESCAPED_SLASHES);
             }



                // Return the image path
                // $imagePath = $monthYearFolder . '/' . $fileName;

                $row->title = $request->title;
                $row->purpose = $request->purpose;
                $row->price = $request->price;
                $row->arrea = $request->arrea;
                $row->location = $request->location;
                $row->bedrooms = $request->bedrooms;

                if(($_GET['property_type'] == "land_plot")){
                    $row->plot_category = $request->plot_category;
                 }


                 if (isset($request->amenity)) {

                 $row->amenity = json_encode($request->amenity);


                }

                $row->bathrooms = $request->bathrooms;
                $row->furnished_status = $request->furnished_status;
                $row->category_type = $request->category_type;
                $row->construction_age = $request->construction_age;
                $row->status = $request->status;

                $row->property_description = $request->property_description;
                $row->additional_description = $request->additional_description;
                $row->meta_title = $request->meta_title;
                $row->meta_tags = $request->meta_tags;
                $row->property_type = $_GET['property_type'];
                $row->meta_description = $request->meta_description;
                $row->save();
                return redirect('/admin/property-management-properties?property_type='.$_GET['property_type'].'')->with('success','Property Update Successfully');
        }else{
            if(isset($_GET['property_type']) && !empty($_GET['property_type'])){

            return view('admin.property.edit',compact('row'));

        }else{
            return redirect('/admin/dashboard')->with('error','Invalid Url');
        }
        }
    }


    public function delete_property($id){
        $property = Property::findOrFail($id);
        $gallery = json_decode($property->gallery, true);

        // Check if the gallery is not empty
        if (!empty($gallery) && is_array($gallery)) {
            foreach ($gallery as $imagePath) {
                // Check if the file exists and unlink it
                if (File::exists(public_path($imagePath))) {
                    File::delete(public_path($imagePath));
                }
            }
        }



        if (!empty($property->thumbnail)) {

                // Check if the file exists and unlink it
                if (File::exists(public_path($property->thumbnail))) {
                    File::delete(public_path($property->thumbnail));
                }

        }



        // Optionally clear the gallery column after deletion
        $property->delete();


        return redirect()->back()->with('success','Property Deleted Successfully');


    }

}