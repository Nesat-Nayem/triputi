<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Appointment;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactdata(){
        // $contact = Contact::get();
        $contact = Contact::orderBy('created_at', 'desc')->get();
        return view('admin.contact.index', compact('contact'));
    }
    public function delete(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect()->route('contact-list')->with('success', 'Delete Successfully');
    }


        public function appointmentdata(){
        $appointment = Appointment::orderBy('created_at', 'desc')->get();
        return view('admin.appointment.index', compact('appointment'));
    }

    public function delete_appointment(Request $request, $id){
        $appointment = Appointment::find($id);
        $appointment->delete();
        return redirect()->route('appointment-list')->with('success', 'Delete Successfully');
    }
}
