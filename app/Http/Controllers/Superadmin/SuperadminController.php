<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CRM\Customers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;



class SuperadminController extends Controller
{

    public function upload_voice(Request $request){

        $uploadedFileUrl = Cloudinary::uploadFile($request->file('audio')->getRealPath())->getSecurePath();

        return response()->json(['url' => $uploadedFileUrl]);
    }

    public function dashboard(){
        return view('superadmin.dashboard');
    }

    public function addcustomers(){
        return view('superadmin.addcustomers');
    }

    public function topitems(){
        return view('superadmin.topitems');
    }

    public function savecustomer(Request $request){

        $validated = $request->validate([
            'name' => 'required',
            'mobile' => 'required',
        ]);

        $customer = new Customers;
        $top = [];
        $i = 0;

        foreach ($request->top as $key => $value) {
            $top[$i]['type'] = $value['type'];
            $top[$i]['arms'] = $value['arms'];
            $top[$i]['hip'] = $value['hip'];
            $top[$i]['length'] = $value['length'];
            $top[$i]['shoulder'] = $value['shoulder'];
            $top[$i]['chest'] = $value['chest'];
            $top[$i]['belly'] = $value['belly'];
            $top[$i]['sleeve_length'] = $value['sleeve_length'];
            $top[$i]['collor'] = $value['collor'];
            $top[$i]['cuff'] = $value['cuff'];
            $top[$i]['three_foure'] = $value['three_foure'];
            $top[$i]['style'] = $value['style'];
            $i++;
        }
        $customer->top_data = json_encode($top);
        $bottom = [];
        $i = 0;
        foreach ($request->bottom as $key => $value) {
            $bottom[$i]['type'] = $value['type'];
            $bottom[$i]['length'] = $value['length'];
            $bottom[$i]['waist'] = $value['waist'];
            $bottom[$i]['hip'] = $value['hip'];
            $bottom[$i]['pockland'] = $value['pockland'];
            $bottom[$i]['thigh'] = $value['thigh'];
            $bottom[$i]['knee'] = $value['knee'];
            $bottom[$i]['potree'] = $value['potree'];
            $bottom[$i]['btm'] = $value['btm'];
            $bottom[$i]['btm'] = $value['btm'];
            $bottom[$i]['hight'] = $value['hight'];
            $bottom[$i]['style'] = $value['style'];
            $i++;
        }
        $customer->bottom_data = json_encode($bottom);
        $customer->name = $request->name;
        $customer->mobile = $request->mobile;
        $customer->audioPlayer_input = $request->audioPlayer_input;
        $customer->dob = $request->dob;
        $customer->delivery_date = $request->delivery_date;


        $lastItem = DB::table('cusotmers')->orderBy('id', 'desc')->first();

        // Check if we have a record to get the last ID, or start from 0 if it's empty
        $lastId = $lastItem ? (int) $lastItem->id : 0;

        // Increment the ID for the next one
        $newId = $lastId + 1;

        // Format the ID to have leading zeros (e.g., 001, 002, ..., 990)
        $formattedId = str_pad($newId, 3, '0', STR_PAD_LEFT);


        $customer->bill_number =  $formattedId;
        $customer->order_date = $request->order_date;
        $customer->salesman_code = $request->salesman_code;
        $customer->gst = $request->gst;
        $customer->fabrics = $request->fabrics;
        $customer->quantity = $request->quantity;
        $customer->amount = $request->amount;
        $customer->total_quantity = $request->total_quantity;
        $customer->total_amount = $request->total_amount;
        $customer->discount = $request->discount;
        $customer->advance = $request->advance;
        $customer->advance_date = $request->advance_date;
        $customer->balance = $request->balance;
        $customer->receive = $request->receive;
        $customer->receive_date = $request->receive_date;

        if ($request->fabric_image) {
            $customer->fabric_image = uploadImage($request->fabric_image,$customer,'fabric_image');
        }
        $customer->note = $request->note;


        $message = 'Welcome to SP Cotton! 🎉

We\'re excited to have you join our community!
Let us know if you have any questions.
We\'re here to help!
SP Cotton Team';


        $phone = $request->mobile;


        $whatsapp_message = Http::post('http://wapi.nationalsms.in/wapp/v2/api/send?apikey=2f233ed1a046484f9bfa0f985e4d0f0b&mobile=' . $phone . '&msg=' . $message . '');

        $result = json_decode($whatsapp_message);


        $customer->save();


        return redirect('/crm/customers-list')->with('success','Customer Added Successfully !');


        // if($result->status == "success" && $result->statuscode == 200){

        // return redirect('/crm/customers-list')->with('success','Customer Added Successfully !');
        // }

        // else{
        //     return redirect('/crm/customers-list')->with('error',$result->msg);
        // }


    }
    public function customerslist(Request $request){
        if (isset($_GET['search']) && !empty($_GET['search'])) {
            $search = $request->input('search');  // Get the search query from the request

            $customers = Customers::where(function($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                      ->orWhere('mobile', 'like', "%{$search}%")
                      ->orWhere('bill_number', 'like', "%{$search}%");
            })->get();

        }else{
        $customers = Customers::latest()->paginate(10);

    }
    return view('superadmin.customerslist',compact('customers'));
    }



    public function editcustomers(Request $request, $id){
        $row = Customers::findorfail($id);
        if ($request->method() == "POST") {

            $validated = $request->validate([
                'name' => 'required',
                'mobile' => 'required',
            ]);

            $top = [];
            $i = 0;

            foreach ($request->top as $key => $value) {
                $top[$i]['type'] = $value['type'];
                $top[$i]['arms'] = $value['arms'];
                $top[$i]['hip'] = $value['hip'];
                $top[$i]['length'] = $value['length'];
                $top[$i]['shoulder'] = $value['shoulder'];
                $top[$i]['chest'] = $value['chest'];
                $top[$i]['belly'] = $value['belly'];
                $top[$i]['sleeve_length'] = $value['sleeve_length'];
                $top[$i]['collor'] = $value['collor'];
                $top[$i]['cuff'] = $value['cuff'];
                $top[$i]['three_foure'] = $value['three_foure'];
                $top[$i]['style'] = $value['style'];
                $i++;
            }

            $row->top_data = json_encode($top);
            $bottom = [];
            $i = 0;

            foreach ($request->bottom as $key => $value) {
                $bottom[$i]['type'] = $value['type'];
                $bottom[$i]['length'] = $value['length'];
                $bottom[$i]['waist'] = $value['waist'];
                $bottom[$i]['hip'] = $value['hip'];
                $bottom[$i]['pockland'] = $value['pockland'];
                $bottom[$i]['thigh'] = $value['thigh'];
                $bottom[$i]['knee'] = $value['knee'];
                $bottom[$i]['potree'] = $value['potree'];
                $bottom[$i]['btm'] = $value['btm'];
                $bottom[$i]['btm'] = $value['btm'];
                $bottom[$i]['hight'] = $value['hight'];
                $bottom[$i]['style'] = $value['style'];
                $i++;
            }

            $row->bottom_data = json_encode($bottom);
            $row->name = $request->name;
            $row->mobile = $request->mobile;
            $row->dob = $request->dob;
            $row->audioPlayer_input = $request->audioPlayer_input;
            $row->delivery_date = $request->delivery_date;


            $lastItem = DB::table('cusotmers')->orderBy('id', 'desc')->first();

            // Check if we have a record to get the last ID, or start from 0 if it's empty
            $lastId = $lastItem ? (int) $lastItem->id : 0;

            // Increment the ID for the next one
            $newId = $lastId + 1;

            // Format the ID to have leading zeros (e.g., 001, 002, ..., 990)
            $formattedId = str_pad($newId, 3, '0', STR_PAD_LEFT);


            // $row->bill_number =  $request->bill_number;
            $row->order_date = $request->order_date;
            $row->salesman_code = $request->salesman_code;
            $row->gst = $request->gst;
            $row->fabrics = $request->fabrics;
            $row->quantity = $request->quantity;
            $row->amount = $request->amount;
            $row->total_quantity = $request->total_quantity;
            $row->total_amount = $request->total_amount;
            $row->discount = $request->discount;
            $row->advance = $request->advance;
            $row->advance_date = $request->advance_date;
            $row->balance = $request->balance;
            $row->receive = $request->receive;
            $row->receive_date = $request->receive_date;
            if ($request->fabric_image) {
                $row->fabric_image = updateImage($request->fabric_image,$row,'fabric_image');
            }
            $row->note = $request->note;
            $row->save();
            return redirect('/crm/customers-list')->with('success','Customer Update Successfully !');
        }
        return view('superadmin.editcustomers',compact('row'));
    }


    public function customerinvoice($id){
        $row = Customers::findorfail($id);
        return view('superadmin.customerinvoice',compact('row'));
    }

    public function viewcustomer($id){
        $row = Customers::findorfail($id);
        return view('superadmin.viewcustomer',compact('row'));
    }


    public function deliverylist(){
        return view('superadmin.deliverylist');
    }
    public function ongoinglist(){
        return view('superadmin.ongoinglist');
    }
    public function newworklist(){
        return view('superadmin.newworklist');
    }
    public function birthdayreminder(){
        return view('superadmin.birthdayreminder');
    }

    public function invoice(){
        return view('superadmin.invoice');
    }


}
