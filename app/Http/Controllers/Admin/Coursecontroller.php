<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Location;
use App\Models\Reels;
use App\Models\Amenity;
use App\Models\Servicecategory;
use App\Models\Blogscategory;
use App\Models\Areas;
use App\Models\Booking;
use App\Models\Ratelist;
use App\Models\Customers;
use App\Models\Amount;
use App\Models\Reports;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class Coursecontroller extends Controller
{


    public function service_categories_list(){
        $cates = Servicecategory::get();
        return view('admin.servicecategory.index',compact('cates'));
    }

    public function service_categories_change($id){
        $cates = Servicecategory::find($id);
        if ($cates->status == "Y") {
            $cates->status = "N";
        }else{
            $cates->status = "Y";
        }
        $cates->save();  
        return redirect()->back();
    }

    public function service_delete_category($id){
        $cates = Servicecategory::find($id);
        $cates->delete();
        return redirect('/admin/service-delete-category')->with('success', ' deleted successfully');
    }


    public function servicecategories(Request $request){
        if ($request->method() == "POST") {
            // $validatedData = $request->validate([
            //     'title' => ['required'],
            //     'status' => ['required'],
            // ]);

            // echo "<pre>";
            // dd($request->all());
            // die;

            $cates = new Servicecategory;
            $cates->title = $request->title;
            $cates->save();
            return redirect('/admin/service-categories-list')->with('success', 'Created Successfully');
        }
        return view('admin.servicecategory.add');

    }

    public function edit_service_categories($id,Request $request){
        $cates = Servicecategory::find($id);
        if ($request->method() == "POST") {
            // $validatedData = $request->validate([
            //     'title' => ['required'],
            //     'status' => ['required'],
            // ]);

            $cates->title = $request->title;
            $cates->save();
            return redirect('/admin/service-categories-list')->with('success', 'Created Successfully');
        }
        return view('admin.servicecategory.edit',compact('cates'));
    }

    public function category_change_status($id){
        $data = Category::find($id);
        if ($data->status == "Y") {
            $data->status = "N";
        }else{
            $data->status = "Y";
        }
        $data->save();  
        return redirect()->back();
    }

    public function blogs_categories_list(){
        $cateb = Blogscategory::get();
        return view('admin.blogscategory.index',compact('cateb'));
    }

    public function blogscategories(Request $request){
        if ($request->method() == "POST") {
            // $validatedData = $request->validate([
            //     'title' => ['required'],
            //     'status' => ['required'],
            // ]);
            $cateb = new Category;
            $cateb->title = $request->title;
            $cateb->type = $request->type;
            $cateb->status = $request->status;
            $cateb->save();
            return redirect()->back()->with('success', 'Created Successfully');
        }
        return view('admin.blogscategory.add');

    }

    public function edit_blogs_categories($id,Request $request){
        $cateb = Category::find($id);
        if ($request->method() == "POST") {
            // $validatedData = $request->validate([
            //     'title' => ['required'],
            //     'status' => ['required'],
            // ]);

            $cateb->title = $request->title;
            $cateb->type = $request->type;
            $cateb->status = $request->status;
            $cateb->save();
            return redirect()->back()->with('success', 'Updated! Successfully');
        }
        // return view('admin.blogscategory.edit',compact('cateb'));
    }

    public function blogs_delete_category($id){
        $cateb = Category::find($id);
        $cateb->delete();
        return redirect()->back()->with('success','deleted! Done');
    }

    public function blogs_categories_change($id){
        $cateb = Blogscategory::find($id);
        if ($cateb->status == "Y") {
            $cateb->status = "N";
        }else{
            $cateb->status = "Y";
        }
        $cateb->save();  
        return redirect()->back();
    }


 

    public function newcategories(Request $request){
        if ($request->method() == "POST") {
            // $validatedData = $request->validate([
            //     'title' => ['required'],
            //     'status' => ['required'],
            // ]);

            $new = new Category;
            $new->title = $request->title;
        
            $new->type = $request->type;
            // $new->type = $_GET['type'];
            $new->save();
            return redirect('/admin/categories?type='.$request->type)->with('success', 'Created Successfully');
        }
        return view('admin.categories.add');

    }


 


    public function categories(){
        if (isset($_GET['type']) && !empty($_GET['type'])) {
            $data = Category::where('type', $_GET['type'])->orderBy('id', 'desc')->paginate(10);
            return view('admin.categories.index', compact('data'));
        } else {
            abort(404);
        }
    }


    
    public function editategories(Request $request, $id)
    {
        $row = Category::find($id);

        if ($request->method() == "POST") {

            $validatedData = $request->validate([
                'title' => ['required'],
                // 'status' => ['required'],
            ]);

            $row->title = $request->title;
            // $row->status = $request->status;
            $row->type = $_GET['type'];
            $row->save();
            return redirect('/admin/categories?type=' . $_GET['type'])->with('success', 'Updated Successfully');
        }
        if (isset($row)) {
            if (isset($_GET['type']) && !empty($_GET['type'])) {
                return view('admin.categories.edit', compact('row'));
            }
        } else {
            abort(404);
        }
    }





    // public function categories()
    // {
    //     if (isset($_GET['type']) && !empty($_GET['type'])) {
    //         $data = Category::where('type', $_GET['type'])->orderBy('id', 'desc')->paginate(10);
    //         return view('admin.categories.index', compact('data'));
    //     } else {
    //         abort(404);
    //     }
    // }
    public function categories_types($id)
    {

            $row = Category::where('id', $id)->firstorfail();
            $data = Category::where('type','property_category_type')->where('category_type', $id)->get();

            return view('admin.categories.types', compact('row','data'));

    }

    

    public function categories_types_ajax_get($category){
        $row = Category::find($category);
        $type = "property";
        return view('admin.categories.edit_type', compact('row','type'));
    }
    public function amenity(){
        $data = Amenity::latest()->get();
        return view('admin.amenity.index',compact('data'));
    }

    public function getamenity($id) {
        $data = Amenity::find($id);
        return view('admin.amenity.edit',compact('data'));
    }

    public function newamenity(Request $request){


        $validatedData = $request->validate([
            'name' => ['required'],
        ]);


        $new = new Amenity;
        $new->name = $request->name;
        $new->icon_code = $request->icon_code;
        $new->status = $request->status;
        $new->save();
        return redirect()->back()->with('success', 'Amenity Created Successfully');

    }

    public function updateamenity(Request $request,$id){


        $validatedData = $request->validate([
            'name' => ['required'],
        ]);
        $new =  Amenity::find($id);
        $new->name = $request->name;
        $new->icon_code = $request->icon_code;
        $new->status = $request->status;
        $new->save();
        return redirect()->back()->with('success', 'Amenity Update Successfully');

    }

    public function country(){
        $data = Location::where('type','country')->latest()->get();
        return view('admin/country/index',compact('data'));
    }

    public function states(){
        $data = Location::where('type', 'state')
        ->with('country')
        ->latest()
        ->get();

        return view('admin/states/index',compact('data'));
    }

    public function getstate($id) {
        $row = Location::find($id);
        return view('admin/states/edit',compact('row'));
    }

    public function newcountry(Request $request)
    {

        $new = new Location;

        if(isset($request->country) && $request->country == "Y"){
            $new->name = $request->name;
            $new->status = $request->status;
            $new->type = 'country';
            $message = 'Country';
        }elseif(isset($request->state) && $request->state == "Y"){
            $new->name = $request->name;
            $new->status = $request->status;
            $new->country_id = $request->country;
            $new->type = 'state';
            $message = 'State';
        }else{
            $message = "";
        }
        $new->save();
        return redirect()->back()->with('success',' '.$message.' Created Successfully');
    }

    public function updatecountry(Request $request,$id)
    {
        $new = Location::findorfail($id);
   if(isset($request->country) && $request->country == "Y"){
            $new->name = $request->name;
            $new->status = $request->status;
            $new->type = 'country';
            $message = 'Country';
        }elseif(isset($request->state) && $request->state == "Y"){
            $new->name = $request->name;
            $new->status = $request->status;
            $new->country_id = $request->country;
            $new->type = 'state';
            $message = 'State';
        }else{
            $message = "";
        }
        $new->save();
        return redirect()->back()->with('success',' '.$message.' Update Successfully');
    }

    public function getcountry($id) {
        $row = Location::find($id);
        return view('admin/country/edit',compact('row'));
    }


    public function getcategorytypedetails(Request $request){
        $categoryid = $request->id;
        $categories = Category::where('category_type',$categoryid)->where('status','Y')->get();
        $html = '';
        foreach($categories as $val){
            $html .= '<option value="'.$val->id.'">'.$val->title.'</option>';
        }

        return $html;

    }

    public function getcategories($id) {
        $row = Category::find($id);
        $type = "property";
        return view('admin.categories.edit', compact('row','type'));
    }

    // public function editategories(Request $request, $id)
    // {
    //     $row = Category::find($id);

    //     if ($request->method() == "POST") {

    //         $validatedData = $request->validate([
    //             'title' => ['required'],
    //             'status' => ['required'],
    //         ]);

    //         $row->title = $request->title;
    //         $row->status = $request->status;

    //         if (isset($request->category_type) && $request->category_type == "Y") {
    //             $row->type = 'property_category_type';
    //             $row->category_type = $request->category;
    //             $row->save();
    //             return redirect()->back()->with('success', 'Updated Successfully');
    //         }else{
    //         $row->type = $_GET['type'];
    //         $row->save();
    //         return redirect('/admin/categories?type=' . $_GET['type'])->with('success', 'Updated Successfully');
    //     }
    // }
    //     if (isset($row)) {
    //         if (isset($_GET['type']) && !empty($_GET['type'])) {
    //             return view('admin.categories.edit', compact('row'));
    //         }
    //     } else {
    //         abort(404);
    //     }
    // }

    public function courses()
    {
        return view('superadmin.courses.index');
    }

    public function newcourse(Request $request)
    {
        return view('superadmin.courses.add');
    }

    public function showreels(Request $request)
    {
        $data = Reels::orderBy('id', 'desc')->paginate(10);
        return view('superadmin.reels.index', compact('data'));
    }

    public function newreel(Request $request)
    {
        if ($request->method() == "POST") {
            $validatedData = $request->validate([
                'yt_video' => ['required', 'url'],
            ]);

            $reels = new Reels;
            $reels->yt_video = $request->yt_video;
            $reels->save();
            return redirect('/admin/show-reels')->with('success', 'Created Successfully');
        }
        return view('superadmin.reels.add');
    }


    public function editreels(Request $request, $id)
    {
        $reels = Reels::findOrFail($id);
        if ($request->method() == "POST") {
            $validatedData = $request->validate([
                'yt_video' => ['required', 'url'],
            ]);

            $reels->yt_video = $request->yt_video;
            $reels->save();
            return redirect('/admin/show-reels')->with('success', 'Created Successfully');
        }
        return view('superadmin.reels.edit', compact('reels'));
    }


    public function create_blog_categories(Request $request){
        if ($request->method() == "POST") {

            $validatedData = $request->validate([
                'title' => ['required'],
                'status' => ['required'],
            ]);
            $new = new Category;
            $new->title = $request->title;
            $new->status = $request->status;
            $new->type = $request->type;
            // $new->type = $_GET['type'];
            $new->save();
            return redirect('/admin/categories?type='.$request->type)->with('success', 'Created Successfully');
        }
        return view('admin.blogcategories.add');

    }



    public function create_areas(Request $request){
        if ($request->method() == "POST") {
            $area = new Areas;
            $area->city_name = $request->city_name;
            $area->area_name = $request->area_name;
            $area->status = $request->status;
            $area->save();
            return redirect()->back()->with('success', 'Created Successfully');
        }
        return view('admin.areas.add');

    }


    public function create_areas_edit($id,Request $request){
        $area = Areas::find($id);
        if ($request->method() == "POST") {
            $area->city_name = $request->city_name;
            $area->area_name = $request->area_name;
            $area->status = $request->status;
            $area->save();
            return redirect()->back()->with('success', 'Updated! Successfully');
        }

    }

    public function areas_delete($id){
        $area = Areas::find($id);
        $area->delete();
        return redirect()->back()->with('success','deleted! Done');
    }


    
    public function create_booking(Request $request){
        if ($request->method() == "POST") {

            // echo "<pre>";
            // dd($request->all());
            // die;
       
        $output = [];
            $input = $request->booking_items;
     
         $a = 0;
        foreach ($input['item_name'] ?? [] as $index => $item) {
    $output[] = [
        "item_name" => $item,
        "per_piece_rate" => $input["per_piece_rate"][$index],
        "qty" => $input["qty"][$index],
    ];
    $a++;
}
            $booking = new Booking;
            $booking->will_sand = $request->will_sand;
            $booking->will_take = $request->will_take;
            $booking->date = $request->date;

         // Convert array to JSON before saving
        $booking->item_name = json_encode($output);

            $booking->category = $request->category;
            $booking->city = $request->city;
            $booking->phone = $request->phone;
            $booking->area = $request->area;
            $booking->pincode = $request->pincode;
            $booking->transportation_fare = $request->transportation_fare;
            $booking->filled_up = $request->filled_up;
            $booking->receipt_charge = $request->receipt_charge;
            $booking->we_attacked = $request->we_attacked;
            $booking->billed_by = $request->billed_by;
            $booking->total = $request->total;
            $booking->status = $request->status;
            $booking->save();
            return redirect('/admin/bookin-list')->with('success', 'Created Successfully');
        }
        return view('admin.booking.add');

    }

    public function booking_list(Request $request)
    {
        $query = Booking::with('categoryRelation');
    
        // Apply search filter
        if ($request->has('search')) {
            $query->where('uuid', 'like', '%' . $request->search . '%')
                  ->orWhere('will_sand', 'like', '%' . $request->search . '%')
                  ->orWhere('will_take', 'like', '%' . $request->search . '%');
        }
    
        // Paginate results while keeping search query
        $bookings = $query->latest()->paginate(10)->appends(['search' => $request->search]);
    
        return view('admin.booking.index', compact('bookings'));
    }
    


    public function reports_list(){
        $bookings = Booking::with('categoryRelation')->get();
        return view('admin.reports.index', compact('bookings'));
    }
    


    public function bookin_edit($id, Request $request)
    {
        $booking = Booking::find($id);
    
        if (!$booking) {
            return redirect('/admin/bookin-list')->with('error', 'Booking not found.');
        }
    
        if ($request->method() == "POST") {
            $booking->will_sand = $request->will_sand;
            $booking->will_take = $request->will_take;
            $booking->date = $request->date;
            $booking->category = $request->category;
            $booking->city = $request->city;
            $booking->area = $request->area;
            $booking->phone = $request->phone;
            $booking->pincode = $request->pincode;
            $booking->transportation_fare = $request->transportation_fare;
            $booking->filled_up = $request->filled_up;
            $booking->receipt_charge = $request->receipt_charge;
            $booking->we_attacked = $request->we_attacked;
            $booking->total = $request->total;
            $booking->billed_by = $request->billed_by;
            $booking->status = $request->status;
    
            // Processing booking items
            $output = [];
            $input = $request->booking_items ?? [];
    
            if (!empty($input) && is_array($input)) {
                foreach ($input['item_name'] ?? [] as $index => $item) {
                    if (isset($input["per_piece_rate"][$index], $input["qty"][$index])) {
                        $output[] = [
                            "item_name" => $item,
                            "per_piece_rate" => $input["per_piece_rate"][$index],
                            "qty" => $input["qty"][$index],
                        ];
                    }
                }
            }
    
            // Save booking items as JSON
            $booking->item_name = json_encode($output);
    
            $booking->save();
    
            return redirect('/admin/bookin-list')->with('success', 'Updated Successfully!');
        }
    
        return view('admin.booking.edit', compact('booking'));
    }
    

    

    public function bookin_envoice($id,Request $request){
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
            return redirect('/admin/bookin-list')->with('success', 'Updated! Successfully');
        }
       
    }


    public function showBookings(){
    $bookings = Booking::with('categoryRelation')->get(); // Assuming a relationship exists
    return view('admin.bookings.index', compact('bookings'));
}


    public function bookin_delete($id){
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->back()->with('success','deleted! Done');
    }


public function getBookingDetails($id)
{
    // Fetch the booking data with the related category
    $booking = Booking::with('categoryRelation')->find($id); // Use `find` to fetch a single record
    
    if ($booking) {
        return view('admin.booking.detail', compact('booking'));
    }

    return response()->json([
        'status' => 'error',
        'message' => 'Booking not found'
    ]);
}





public function amount_create(Request $request){
    if ($request->method() == "POST") {
        $amount = new Amount;
        $amount->category = $request->category;
        $amount->city_name = $request->city_name;
        $amount->area_name = $request->area_name;
        $amount->amount = $request->amount;
        $amount->status = $request->status;
        $amount->save();
        return redirect()->back()->with('success', 'Created Successfully');
    }
    return view('admin.amounts.add');

}

public function amount_delete($id){
    $amount = Amount::find($id);
    $amount->delete();
    return redirect()->back()->with('success','deleted! Done');
}

public function create_areas_amount($id,Request $request){
        $amount = Amount::find($id);
    if ($request->method() == "POST") {
        $amount->category = $request->category;
        $amount->city_name = $request->city_name;
        $amount->area_name = $request->area_name;
        $amount->amount = $request->amount;
        $amount->status = $request->status;
        $amount->save();
        return redirect()->back()->with('success', 'Updated! Successfully');
    }
}

public function getAmountByCityArea(Request $request)
{
    // Fetch amount based on city_id and area_id from the Amount table
    $amount = Amount::where('category', $request->category_name)
                        ->where('area_name', $request->area_id)
                        ->first();

    // Check if the amount exists, if so return it, else return a default value
    if ($amount) {
        return response()->json(['amount' => $amount->amount]);
    } else {
        return response()->json(['amount' => 0]); // Return 0 or any default value
    }
}






public function view_envoice($id,Request $request){
    $booking = Booking::with('categoryRelation')->find($id); // Use `find` to fetch a single record
    return view('admin.booking.view_envoice',compact('booking'));
}

     
public function create_reports(Request $request){
    if ($request->method() == "POST") {
        // $validated = $request->validate([
        //     'report_nub' => 'required|unique:reports',
        //     'qty' => 'required',
        //     'owner_name' => 'required',
        //     'driver_name' => 'required',
        //     'will_take' => 'required',
        //     'item_info' => 'required',
        //     'village' => 'required',
        //     'vihicle_number' => 'required',
        //     'transport_fare' => 'required',
        //     'filling_charge' => 'required',
        //     'receipt_charge' => 'required',
        //     'commission_a' => 'required',
        //     'market_hamali_charge_b' => 'required',
        //     'commission_taken_c' => 'required',
        //     'remaring_commission' => 'required',
        //     'advance_commission' => 'required',
        // ]);

        // echo "<pre>";
        // dd($request->all());
        // die;
        $reports = new Reports;
        $reports->report_nub = $request->report_nub;
        $reports->qty = $request->qty;
        $reports->owner_name = $request->owner_name;
        $reports->driver_name = $request->driver_name;
        $reports->will_take = $request->will_take;
        $reports->item_info = $request->item_info;
        $reports->date = $request->date;
        $reports->particular_name = $request->particular_name;
        $reports->village = $request->village;
        $reports->vihicle_number = $request->vihicle_number;
        $reports->transport_fare = $request->transport_fare;
        $reports->filling_charge = $request->filling_charge;
        $reports->receipt_charge = $request->receipt_charge;
        $reports->commission_a = $request->commission_a;
        $reports->market_hamali_charge_b = $request->market_hamali_charge_b;
        $reports->commission_taken_c = $request->commission_taken_c;
        $reports->advance_commission = $request->advance_commission;
        $reports->remaring_commission = $request->remaring_commission;
        $reports->total = $request->total;
        $reports->status = $request->status;
        $reports->save();
        return redirect('/admin/reports-list')->with('success', 'Created Successfully');
    }
    return view('admin.reportss.add');
}


// listing--reports

public function reportss_list(Request $request)
{
    $query = Reports::query(); // Start query builder for Reports model
    if ($request->has('search')) {
        $query->where('report_nub', 'like', '%' . $request->search . '%')
              ->orWhere('owner_name', 'like', '%' . $request->search . '%')
              ->orWhere('driver_name', 'like', '%' . $request->search . '%')
              ->orWhere('particular_name', 'like', '%' . $request->search . '%')
              ->orWhere('will_take', 'like', '%' . $request->search . '%');
    }
    $reports = $query->latest()->paginate(10)->appends(['search' => $request->search]);
    return view('admin.reportss.index', compact('reports'));
}




public function reports_edit($id,Request $request){
    $reports = Reports::find($id);
    if ($request->method() == "POST") {
        $reports->report_nub = $request->report_nub;
        $reports->qty = $request->qty;
        $reports->owner_name = $request->owner_name;
        $reports->driver_name = $request->driver_name;
        $reports->will_take = $request->will_take;
        $reports->item_info = $request->item_info;
        $reports->date = $request->date;
        $reports->particular_name = $request->particular_name;
        $reports->village = $request->village;
        $reports->vihicle_number = $request->vihicle_number;
        $reports->transport_fare = $request->transport_fare;
        $reports->filling_charge = $request->filling_charge;
        $reports->receipt_charge = $request->receipt_charge;
        $reports->commission_a = $request->commission_a;
        $reports->market_hamali_charge_b = $request->market_hamali_charge_b;
        $reports->commission_taken_c = $request->commission_taken_c;
        $reports->advance_commission = $request->advance_commission;
        $reports->remaring_commission = $request->remaring_commission;
        $reports->total = $request->total;
        $reports->status = $request->status;
        $reports->save();
        return redirect('/admin/reports-list')->with('success', 'Updated! Successfully');
    }
    return view('admin.reportss.edit',compact('reports'));
}


public function report_delete($id){
    $reports = Reports::find($id);
    $reports->delete();
    return redirect()->back()->with('success','deleted! Done');
}








public function getreportsDetails($id){
    // Fetch the booking data with the related category
    $reports = Reports::find($id); // Use `find` to fetch a single record
    
    if ($reports) {
        return view('admin.reportss.detail', compact('reports'));
    }

    return response()->json([
        'status' => 'error',
        'message' => 'Booking not found'
    ]);
}



public function reports_envoice($id,Request $request){
    $reports = Reports::find($id); // Use `find` to fetch a single record
    return view('admin.reportss.view_envoice',compact('reports'));
}



public function filterReportsByDate(Request $request) {
    $date = $request->date;
    $total = Reports::whereDate('created_at', $date)->sum('total');

    return $total;
}



// rete--list

     
public function create_rate_list(Request $request){
    if ($request->method() == "POST") {
        $validated = $request->validate([
            'particulars_name' => 'required',
            'per_piece_rate' => 'required',
        ]);
        $rate = new Ratelist;
        $rate->particulars_name = $request->particulars_name;
        $rate->per_piece_rate = $request->per_piece_rate;
        $rate->status = $request->status;
        $rate->save();
        return redirect('/admin/rate-list')->with('success', 'Created Successfully');
    }
    return view('admin.ratelist.add');
}

// listing--rate--listing---
public function rate_list(Request $request)
{
    $query = Ratelist::query();
    if($request->has('search')) {
        $query->where('particulars_name', 'like', '%' . $request->search . '%')
              ->orWhere('per_piece_rate', 'like', '%' . $request->search . '%');
    }
    $rate = $query->latest()->paginate(10)->appends(['search' => $request->search]);
    return view('admin.ratelist.index', compact('rate'));
}



  public function rate_edit(Request $request,$id){
    $rate = Ratelist::find($id);
    if ($request->method() == "POST") {
        $validated = $request->validate([
            'particulars_name' => 'required',
            'per_piece_rate' => 'required',
        ]);
        $rate->particulars_name = $request->particulars_name;
        $rate->per_piece_rate = $request->per_piece_rate;
        $rate->status = $request->status;
        $rate->save();
        return redirect('/admin/rate-list')->with('success', 'Created Successfully');
    }
    return view('admin.ratelist.edit',compact('rate'));

  }


  public function rate_delete($id){
    $rate = Ratelist::find($id);
    $rate->delete();
    return redirect()->back()->with('success','deleted! Done');
}



     
public function create_customer(Request $request){
    if ($request->method() == "POST") {
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'map_iframe' => 'nullable',
            'status' => 'required|in:Y,N',
        ]);

        $customer = new Customers;
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->mobile = $request->mobile;
        $customer->map_iframe = $request->map_iframe;
        $customer->status = $request->status;
        $customer->save();

        return redirect('/admin/customer-list')->with('success', 'Created Successfully');
    }
    return view('admin.customers.add');
}


public function customer_list(Request $request)
{
    $query = Customers::query(); // Start query builder for Customers model

    // Apply search filter
    if ($request->has('search')) {
        $query->where('name', 'like', '%' . $request->search . '%')
              ->orWhere('address', 'like', '%' . $request->search . '%')
              ->orWhere('mobile', 'like', '%' . $request->search . '%');
    }
    $customers = $query->latest()->paginate(10)->appends(['search' => $request->search]);
    return view('admin.customers.index', compact('customers'));
}




  public function customer_edit(Request $request, $id){
    $customer = Customers::findOrFail($id); // Fetch customer by ID, return 404 if not found

    if ($request->method() == "POST") {
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'map_iframe' => 'nullable',
            'status' => 'required|in:Y,N',
        ]);

        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->mobile = $request->mobile;
        $customer->map_iframe = $request->map_iframe;
        $customer->status = $request->status;
        $customer->save();

        return redirect('/admin/customer-list')->with('success', 'Updated Successfully');
    }

    return view('admin.customers.edit', compact('customer'));
}


public function customer_delete($id){
    $customer = Customers::find($id);
    $customer->delete();
    return redirect()->back()->with('success','deleted! Done');
}





// driver--role----manage

   
public function create_reports_driver(Request $request){
    if ($request->method() == "POST") {
        $validated = $request->validate([
            'report_nub' => 'required|unique:reports',
            'qty' => 'required',
            'owner_name' => 'required',
            'driver_name' => 'required',
            'will_take' => 'required',
            'item_info' => 'required',
            'village' => 'required',
            'vihicle_number' => 'required',
            'transport_fare' => 'required',
            'filling_charge' => 'required',
            'receipt_charge' => 'required',
            'commission_a' => 'required',
            'market_hamali_charge_b' => 'required',
            'commission_taken_c' => 'required',
            'remaring_commission' => 'required',
            'advance_commission' => 'required',
        ]);
        $reports = new Reports;
        $reports->report_nub = $request->report_nub;
        $reports->qty = $request->qty;
        $reports->owner_name = $request->owner_name;
        $reports->driver_name = $request->driver_name;
        $reports->will_take = $request->will_take;
        $reports->item_info = $request->item_info;
        $reports->date = $request->date;
        $reports->particular_name = $request->particular_name;
        $reports->village = $request->village;
        $reports->vihicle_number = $request->vihicle_number;
        $reports->transport_fare = $request->transport_fare;
        $reports->filling_charge = $request->filling_charge;
        $reports->receipt_charge = $request->receipt_charge;
        $reports->commission_a = $request->commission_a;
        $reports->market_hamali_charge_b = $request->market_hamali_charge_b;
        $reports->commission_taken_c = $request->commission_taken_c;
        $reports->advance_commission = $request->advance_commission;
        $reports->remaring_commission = $request->remaring_commission;
        $reports->total = $request->total;
        $reports->status = $request->status;
        $reports->save();
        return redirect('/Driver/reports-list-driver')->with('success', 'Created Successfully');
    }
    return view('manager.report.add');
}


public function reportss_list_driver(Request $request)
{
    $query = Reports::query(); // Start query builder for Reports model

    // Apply search filter
    if ($request->has('search')) {
        $query->where('report_nub', 'like', '%' . $request->search . '%')
        ->orWhere('owner_name', 'like', '%' . $request->search . '%')
        ->orWhere('driver_name', 'like', '%' . $request->search . '%')
        ->orWhere('particular_name', 'like', '%' . $request->search . '%')
        ->orWhere('will_take', 'like', '%' . $request->search . '%');
    }

    $reports = $query->latest()->paginate(10)->appends(['search' => $request->search]);

    return view('manager.report.index', compact('reports'));
}





public function reports_driver_edit($id,Request $request){
    $reports = Reports::find($id);
    if ($request->method() == "POST") {
        $reports->report_nub = $request->report_nub;
        $reports->qty = $request->qty;
        $reports->owner_name = $request->owner_name;
        $reports->driver_name = $request->driver_name;
        $reports->will_take = $request->will_take;
        $reports->item_info = $request->item_info;
        $reports->date = $request->date;
        $reports->particular_name = $request->particular_name;
        $reports->village = $request->village;
        $reports->vihicle_number = $request->vihicle_number;
        $reports->transport_fare = $request->transport_fare;
        $reports->filling_charge = $request->filling_charge;
        $reports->receipt_charge = $request->receipt_charge;
        $reports->commission_a = $request->commission_a;
        $reports->market_hamali_charge_b = $request->market_hamali_charge_b;
        $reports->commission_taken_c = $request->commission_taken_c;
        $reports->advance_commission = $request->advance_commission;
        $reports->remaring_commission = $request->remaring_commission;
        $reports->total = $request->total;
        $reports->status = $request->status;
        $reports->save();
        return redirect('/Driver/reports-list-driver')->with('success', 'Updated! Successfully');
    }
    return view('manager.report.edit',compact('reports'));
}




public function report_delete_driver($id){
    $reports = Reports::find($id);
    $reports->delete();
    return redirect()->back()->with('success','deleted! Done');
}


public function getreportsDetailsdriver($id){
    // Fetch the booking data with the related category
    $reports = Reports::find($id); // Use `find` to fetch a single record
    
    if ($reports) {
        return view('manager.report.detail', compact('reports'));
    }

    return response()->json([
        'status' => 'error',
        'message' => 'Booking not found'
    ]);
}


}