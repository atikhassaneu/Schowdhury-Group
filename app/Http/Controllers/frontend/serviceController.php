<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class serviceController extends Controller
{
    public  function index(){
        return view('frontend.services');
    }
}
