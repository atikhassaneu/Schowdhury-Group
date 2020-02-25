<?php

namespace App\Http\Controllers\admin;

use App\gallery;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = gallery::all();
        return view('admin.gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.gallery.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
//            'caption' => 'required',
            'image' => 'required | mimes:png,jpeg,jpg | max:3000'
        ]);

        $image = $request->file('image');

        if (isset($image)){
            if (!file_exists('uploads/gallery')){
                mkdir('uploads/gallery',777,true);
            }

            $img_name = $request->title.'-'.Carbon::now()->toDateTimeString().'-'.uniqid();
            $img_exten = $image->getClientOriginalExtension();
            $img_name = str_slug($img_name).'.'.$img_exten;
            $temp_image = Image::make($image)->resize(1800,1200);
            $temp_image->save('uploads/gallery/'.$img_name);


        }

        $gallery = new gallery();
        $gallery->caption = $request->caption;
        $gallery->slug = $img_name;
        $gallery->save();

        Toastr::success('Image  added successfully', 'Save', ["positionClass" => "toast-top-right"]);
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = gallery::find($id);
        return view ("admin.gallery.edit",compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gallery = gallery::find($id);

        $this->validate($request,[
//            'caption' => 'required',
            'image' => 'mimes:png,jpeg,jpg | max:3000'
        ]);

        $image = $request->file('image');

        if (isset($image)){
            if (!file_exists('uploads/gallery')){
                mkdir('uploads/gallery',777,true);
            }

            $img_name = $request->caption.'-'.Carbon::now()->toDateTimeString().'-'.uniqid();
            $img_exten = $image->getClientOriginalExtension();
            $img_name = str_slug($img_name).'.'.$img_exten;
            $temp_image = Image::make($image)->resize(1800,1200);
            $temp_image->save('uploads/gallery/'.$img_name);

            if (file_exists('uploads/gallery/'.$gallery->slug)){
                unlink('uploads/gallery/'.$gallery->slug);
            }

        }else{
            $img_name = $gallery->slug;
        }

        $gallery->caption = $request->caption;
        $gallery->slug = $img_name;
        $gallery->save();

        Toastr::success('Image Update successfully', 'Update', ["positionClass" => "toast-top-right"]);
        return redirect()->route('gallery.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = gallery::find($id);
        if (file_exists('uploads/gallery/'.$image->slug)){
            unlink('uploads/gallery/'.$image->slug);
        }

        $image->delete();
        Toastr::success('Image Deleted','Delete',["positionClass" => "toast-top-right"]);
        return redirect()->route('gallery.index');
    }
}
