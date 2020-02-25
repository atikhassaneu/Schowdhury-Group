@extends('frontend.layout.master_layout')
@section('title','Logistics')
@section('content')
<!--======Services Section Area Start ======-->
<!-- Hero Area Start -->
<section class="hero-area" style="background: url({{asset('frontend/assets/img/logistics_cover.jpg')}}); background-size: cover">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="hero-info">
                    <h2>Logistics</h2>
                    <a href="{{route('index')}}">Home <i class="fa fa-angle-right"></i></a><span>Logistics</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Area End -->
<!-- About-us Area Start -->
<section class="about-us-area section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-left">
                <div class="about-content">
                    <h4 class="py-3">   Supply Chain & Logistic Services</h4>
                    <p>
                        We supply a fully coordinated logistics solution (Road Transportation) to our customers. We have own vehicle 77 nos. (Cover Van – 30, Jumbo Truck – 45 & Oil Tanker – 2) . So we can make the immediate schedule to loading goods according to the customer urgency and production priority. Provide reliable supply chain services from start to end through a close network of quick service by covering related technical support. We are able to supply the production input needs by the feed mills in most effective manner without compromise.
                    </p>

                    <p class="pt-2">
                        To ensure an efficient value we engage many our own trucks for quick supply of merchandise to the feed factory for non-stop production output. Key benefit includes increases in productivity and smooth income for feed manufacturers.
                    </p>
                </div>
                <div class="row py-5">
                    <div class="col-md-6" >
                        <a href="{{asset('frontend/assets/img/logistics1.jpg')}}" data-lightbox="logistics"> <img style="border: 2px solid #e6e6e6; box-shadow: #CCCCCC 1px 1px 1px" src="{{asset('frontend/assets/img/logistics1.jpg')}}"></a>
                    </div>
                    <div class="col-md-6" >
                        <a href="{{asset('frontend/assets/img/logistics2.jpg')}}" data-lightbox="logistics"> <img style="border: 2px solid #e6e6e6; box-shadow: #CCCCCC 1px 1px 1px" src="{{asset('frontend/assets/img/logistics2.jpg')}}"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About-us Area End -->




@endsection