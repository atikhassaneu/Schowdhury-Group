<?php

namespace App\Http\Controllers\frontend;

use App\Product;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    public function index(){
       $sliders = Slider::all();
       $products = Product::all()->take(4);
       $products_count = Product::all()->count();
       return view('frontend.index',compact('sliders','products','products_count'));
    }

    public function product_details($id){
        $product = Product::find($id);
        return view('frontend.product_details',compact('product'));
    }
}
