<?php

namespace App\Http\Controllers\admin;

use App\Contact;
use App\Pageview;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboardController extends Controller
{
   public  function index(){
       $page_views = Pageview::all()->first();
       $newContacts = Contact::all()->where('status',false);
       $sliders = Slider::all()->count();
       $products = Product::all()->count();
       return view('admin.dashboard.index',compact('page_views','newContacts','sliders','products'));
   }
}
