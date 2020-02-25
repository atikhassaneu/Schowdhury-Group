@extends('frontend.layout.master_layout')
@section('title','Services')
@section('content')
<!-- Hero Area Start -->
<section class="hero-area" style="background: url({{asset('frontend/assets/img/service_cover.jpg')}});background-size: cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="hero-info">
                    <h2>Services</h2>
                    <a href="{{route('index')}}">Home <i class="fa fa-angle-right"></i></a><span>Services</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Area End -->



<!-- Services Area Start -->
<section class="services-area section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="project-title">
                    <h2><span>Our</span> Services</h2>
                    <p class="text-left font-weight-normal">Consulting and representing services – Our company is ready to represent the interests of our clients throughout the local markets in particulars, covering different feed mills and agro industries sectors including non-GMO grain for human consume.<br> We provide –</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="service_description">
                  <ul class="text-left">
                      <li><b>Agency services</b></li>
                      <li><b>Security guarantee for import details</b></li>
                      <li><b>Market observation and analysis</b></li>
                      <li><b>Price formation and research</b></li>
                      <li><b>Accurate weight through our own modern web bridge scale</li>
                      <li><b>Strong Logistics support.</b></li>
                  </ul>

                    <p class="text-justify font-weight-normal">
                        <b>Import of agriculture products</b> – Our Company is constantly looking for reliable partners who have the quality commodities as we required. In order to achieve result in this respect we are at all times competitive.
                        <br><br>
                        <b>Quality Control</b> – “S.Chowdhury Group” is always eager to stay updated will all the modern innovations in quality control systems in order to maintain the standard of the quality of fresh commodities that our company’s fundamental competency.
                        <br><br>
                        Our experienced and professional team will provide first-hand information strictly corresponding to your requirements commodity and quantity. We will develop an exclusive program of integration into the market talking into account the specialty of our company/stock merchandise (s), advise you on the current situation within the sector and give aid in planning your strategy for successful entry. S. Chowdhury Group gives you an outstanding opportunity for your long terms business by offering our direct on the basis of trust aimed towards mutual benefit.

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Area End -->






@endsection