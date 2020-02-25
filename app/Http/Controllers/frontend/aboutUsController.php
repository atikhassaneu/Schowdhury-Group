<?php

namespace App\Http\Controllers\frontend;

use App\Contact;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class aboutUsController extends Controller
{
   public function compnany_profile(){
       return view('frontend.company_profile');
   }
   public function management_profile(){
       return view('frontend.management_profile');
   }
    public function reference(){
       return view('frontend.reference');
    }
   public function contact_form(){
       return view('frontend.contact');
   }

    public  function contact_store(Request $request){
        $this->validate($request,[
            'name' =>'min:4|max:20|required',
            'email'=>'required',
            'message' => 'required',
            'g-recaptcha-response'=>'required'
        ]);
        $contact  = new Contact();
        $contact ->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->status = false;

        $contact->save();

        Toastr::success('Thank you.We Will Contact You Soon', 'Congratulation', ["positionClass" => "toast-top-right"]);
        return redirect()->route('contact');

    }
}
