<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{

    public function index(){
     $appointments = appointment::all();
     return view('admin',compact('appointments'));
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'appointment' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->first()
            ], 400);
        }


    $appointment = appointment::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'appointment' => $request->appointment,
        'subject' => $request->subject,
        'message' => $request->message,

    ]);

    if(!$appointment){
        return redirect()->route('index')->with('error', 'Your appointment has been rejected due of missing information')->with('scroll', 'contact');
    }

    return redirect()->route('index')->with('success', 'Appointment has been Reserved, and we will be contacting you shortly.')->with('scroll', 'contact');



    }

}
