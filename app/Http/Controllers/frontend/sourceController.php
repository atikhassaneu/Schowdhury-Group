<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class sourceController extends Controller
{
   public  function index(){
       return view('frontend.source');
   }


}
