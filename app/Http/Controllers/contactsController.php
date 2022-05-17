<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\emailContactForm;
use App\Models\send_contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactsController extends Controller
{
    public function index(){
        $data = send_contact::all();
        return view('backend.contacts.index', compact('data'));
    }

    public function detail($id){
        $data = send_contact::find($id);
        return view('backend.contacts.detail', compact('data'));
    }

    public function send(Request $request){
        $request->validate([
            'reply' => ['required'],
        ]);
        $input = $request->all();
        $details = [
            'subject' => "CAC",
            'nameContact' => $input['nameContact'],
            'emailContact' => $input['emailContact'],
            'contentContact' => $input['contentContact'],
            'reply' => $input['reply']
        ];
        Mail::to($request->emailContact)->send(new emailContactForm($details));
        return redirect()->back()->with('success', 'Send Email Successfully!');
    }
}
