<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('front.pages.contact');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'max:50', 'string'],
            'phone' => ['required'],
            'email' => ['required', 'max:50', 'email'],
            'subject' => ['required', 'max:250', 'string'],
            'message' => ['required', 'max:500', 'string'],
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return back()
        ->with("success","data created successfully");
}
}
