<?php

namespace App\Http\Controllers\admin;

use App\Contact;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }

    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {
        $contact = Contact::find($id);
        $contact->status = true;
        $contact->save();
        return view('admin.contact.show',compact('contact'));
    }


    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {
        $contact  = Contact::find($id);
        $contact->delete();
        Toastr::success('Contact Delete Successfully','Deleted',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
