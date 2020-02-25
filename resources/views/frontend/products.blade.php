@extends('frontend.layout.master_layout')
@section('title','Products')
@section('content')

    <!--======Services Section Area Start ======-->
<!-- Hero Area Start -->
<section class="hero-area" style="background: url({{asset('frontend/assets/img/product_cover.jpg')}});background-size: cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="hero-info">
                    <h2>Products</h2>
                    <a href="{{route('index')}}">Home <i class="fa fa-angle-right"></i></a><span>Product</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Area End -->

<!--====== Market Project area Start ======-->
<section class="market-project-area section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="project-title">
                    <h2><span>Our</span> Products</h2>
                </div>
            </div>
        </div>
        <div class="row margin-top-30">
            @foreach($products as $product)
                <div class="col-lg-6 col-md-6">
                    <div class="project-single-box">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="project-photo">
                                    <img height="400px" width="500px" src="{{asset('uploads/product/'.$product->img_path)}}" alt="pronject-photo">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="project-content">
                                    <h4>{{$product->title}}</h4>
                                    <p>{{substr($product->description,0,100)}}</p>

                                    <a href="{{route('product_details',$product->id)}}">Read More <i class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- project-single-box -->
                </div><!-- col -->
            @endforeach
        </div>
    </div>
</section>
<!--====== Market Project area End ======-->

@endsection