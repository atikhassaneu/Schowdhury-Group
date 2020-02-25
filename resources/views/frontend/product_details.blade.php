@extends('frontend.layout.master_layout')
@section('title')
{{$product->title}}
@endsection
@section('content')


    <section class="singleProduct margin-top-30 p-5">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 col-sm-12">
                <div class="project-single-box">
                    <div class="row">
                        <div class="col-lg-6 p-4">
                            <div class="project-photo">
                                <img height="400px" width="500px" src="{{asset('uploads/product/'.$product->img_path)}}" alt="pronject-photo">
                            </div>
                        </div>
                        <div class="col-lg-6 pb-5">
                            <div class="project-content">
                                <h4>{{$product->title}}</h4>
                                <p class="text-justify pr-3">{{$product->description}}</p>

                            </div>
                        </div>
                    </div>
                </div><!-- project-single-box -->
            </div><!-- col -->
        </div>
    </section>



@endsection