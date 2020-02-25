<?php

namespace App\Http\Controllers\admin;

use App\Slider;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class sliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index',compact('sliders'));
    }


    public function create()
    {
       return view("admin.slider.create");
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
//            'subtitle' => 'required',
//            'heading' => 'required',
            'image' => 'required | mimes:png,jpeg,jpg'
            ]);

        $image = $request->file('image');

        if (isset($image)){
            if (!file_exists('uploads/slider')){
                mkdir('uploads/slider',777,true);
            }

            $img_name = $request->title.'-'.Carbon::now()->toDateTimeString().'-'.uniqid();
            $img_exten = $image->getClientOriginalExtension();
            $img_name = str_slug($img_name).'.'.$img_exten;
            $temp_image = Image::make($image)->resize(1200,400);
            $temp_image->save('uploads/slider/'.$img_name);


        }

        $slider = new Slider();
        $slider->title = $request->title;
//        $slider->heading = $request->heading;
//        $slider->subtitle = $request->subtitle;
        $slider->img_path = $img_name;
        $slider->save();

        Toastr::success('Slider added successfully', 'Save', ["positionClass" => "toast-top-right"]);
        return redirect()->route('slider.index');


    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.edit',compact('slider'));
    }


    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);

        $this->validate($request,[
            'title' => 'required',
//            'subtitle' => 'required',
//            'heading' => 'required',
            'image' => 'mimes:png,jpeg,jpg'
        ]);

        $image = $request->file('image');

        if (isset($image)){
            if (!file_exists('uploads/slider')){
                mkdir('uploads/slider',777,true);
            }

            $img_name = $request->title.'-'.Carbon::now()->toDateTimeString().'-'.uniqid();
            $img_exten = $image->getClientOriginalExtension();
            $img_name = str_slug($img_name).'.'.$img_exten;
            $temp_image = Image::make($image)->resize(1200,400);
            $temp_image->save('uploads/slider/'.$img_name);

            if (file_exists('uploads/slider/'.$slider->img_path)){
                unlink('uploads/slider/'.$slider->img_path);
            }

        }else{
            $img_name = $slider->img_path;
        }

        $slider->title = $request->title;
//        $slider->heading = $request->heading;
//        $slider->subtitle = $request->subtitle;
        $slider->img_path = $img_name;
        $slider->save();

        Toastr::success('Slider Update successfully', 'Update', ["positionClass" => "toast-top-right"]);
        return redirect()->route('slider.index');



    }


    public function destroy($id)
    {
       $slider = Slider::find($id);

       if (file_exists('uploads/slider/'.$slider->img_path)){
           unlink('uploads/slider/'.$slider->img_path);
       }

       $slider->delete();
       Toastr::success('Slider Deleted','Delete',["positionClass" => "toast-top-right"]);
       return redirect()->route('slider.index');
    }
}
