<?php

namespace App\Http\Controllers\frontend;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class productController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('frontend.products',compact('products'));
    }
}
