<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CRM\Customers;
use App\Models\Cutting_QTY;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class WorkshopController extends Controller
{
    public function dashboard(){
        return view('workshop/dashboard');
    }

    public function newwork(){
        return view('workshop/newwork');
    }

    // --cuttingmaster-unctions

    public function cuttingdashboard(){
        // $today_work =  Customers::whereDate('created_at', Carbon::today())->get();


        if (isset($_GET['search']) && !empty($_GET['search'])) {

            $data['allwork'] = Customers::where('bill_number', 'like', '%' . $_GET['search'] . '%')->get();

            // $data = Cutting_QTY::with('customer')->where('bill_number', 'like', '%' . $searchTerm . '%')->where('user_id',Auth::user()->id)->get();
        }else{



        $data['allwork'] =  Customers::latest()->paginate(10);}
        return view('cutting_master/dashboard',$data);

    }

    public function cutting_update(Request $request){

        $validated = $request->validate([
            'bill' => 'required|numeric|exists:cusotmers,bill_number',
            'category_type' => 'required',
            'qty' => 'required|numeric',
        ]);

        $customerbill = Customers::where('bill_number',$request->bill)->first();

        $customerId = $customerbill->id;

        $new  = new Cutting_QTY;
        $new->customer_id = $customerId;
        $new->user_id = Auth::user()->id;
        $new->category_type = $request->category_type;
        $new->qty = $request->qty;
        $new->save();
        return redirect()->back()->with('success','New Cutting Updated');
    }

    public function completedwork(){


        $data = Cutting_QTY::with('customer')->where('user_id',Auth::user()->id)->paginate(20);

        return view('cutting_master/completedwork',compact('data'));
    }
}
