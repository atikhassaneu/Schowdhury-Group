<?php

namespace App\Http\Controllers\frontend;

use App\gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class galleryController extends Controller
{
    public function index (){
        $gallery = gallery::all();
        return view('frontend.gallery',compact('gallery'));
    }
}
