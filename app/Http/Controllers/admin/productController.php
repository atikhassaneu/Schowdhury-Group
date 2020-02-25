<?php

namespace App\Http\Controllers\admin;

use App\Product;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;


class productController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }


    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'image' => 'required | mimes:png,jpeg,jpg'
        ]);

        $image = $request->file('image');

        if (isset($image)){
            if (!file_exists('uploads/product')){
                mkdir('uploads/product',777,true);
            }

            $img_name = $request->title.'-'.Carbon::now()->toDateTimeString().'-'.uniqid();
            $img_exten = $image->getClientOriginalExtension();
            $img_name = str_slug($img_name).'.'.$img_exten;
            $temp_image = Image::make($image)->resize(500,400);
            $temp_image->save('uploads/product/'.$img_name);

        }

        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->img_path = $img_name;
        $product->save();

        Toastr::success('Product added successfully', 'Save', ["positionClass" => "toast-top-right"]);
        return redirect()->route('product.index');
    }


    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.product.show',compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit',compact('product'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:png,jpeg,jpg'
        ]);
        $product = Product::find($id);
        $image = $request->file('image');

        if (isset($image)){
            if (!file_exists('uploads/product')){
                mkdir('uploads/product',777,true);
            }

            $img_name = $request->title.'-'.Carbon::now()->toDateTimeString().'-'.uniqid();
            $img_exten = $image->getClientOriginalExtension();
            $img_name = str_slug($img_name).'.'.$img_exten;

            $temp_image = Image::make($image)->resize(500,400);
            $temp_image->save('uploads/product/'.$img_name);

            if (file_exists('uploads/product/'.$product->img_path)){
                unlink('uploads/product/'.$product->img_path);
            }

        }else{
            $img_name = $product->img_path;
        }


        $product->title = $request->title;
        $product->description = $request->description;
        $product->img_path = $img_name;
        $product->save();

        Toastr::success('Product Updated successfully', 'Update', ["positionClass" => "toast-top-right"]);
        return redirect()->route('product.index');

    }


    public function destroy($id)
    {
        $product = Product::find($id);

        if (file_exists('uploads/product/'.$product->img_path)){
            unlink('uploads/product/'.$product->img_path);
        }

        $product->delete();
        Toastr::success('Product Deleted','Delete',["positionClass" => "toast-top-right"]);
        return redirect()->route('product.index');

    }
}
