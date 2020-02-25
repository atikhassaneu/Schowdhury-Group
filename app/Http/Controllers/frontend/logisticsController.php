<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class logisticsController extends Controller
{
    public function index(){
        return view('frontend.logistics');
    }


}
