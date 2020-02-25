@extends('frontend.layout.master_layout')
@section('title','Company Profile')
@section('content')
<!--======Services Section Area Start ======-->
<!-- Hero Area Start -->
<section class="hero-area" style="background: url({{asset('frontend/assets/img/company_profile_cover.jpg')}});background-size: cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="hero-info">
                    <h2>Company Overview</h2>
                    <a href="{{route('index')}}">Home <i class="fa fa-angle-right"></i></a><span>Company Profile</span>
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
            <div class="col-lg-8 text-center">
                <div class="about-content">

                    <p class="text-left"><b>“S. Chowdhury Group”</b> with its corporate office in Dhanmondi, Dhaka, Bangladesh, is a reputed “Trading House”. Allied Concern of  S. Chowdhury Group –</p>

                    <ul class="text-left py-5">
                        <li><b>Chowdhury Food & Feed Agro Industries Limited.</b></li>
                        <li><b>Chowdhury Enterpise.</b></li>
                        <li><b>Chowdhury & Brothers.</b></li>
                        <li><b>SNB Food & Agro Industries limited.</b></li>
                        <li><b>Trade Link.</b></li>
                    </ul>
                    <p class="text-left">The companies has been dealing & handling various raw materials of food & feed ingredient for mills respectively. As a professional Sourcing, Importing & Supplying organization, we are responsible for the Sourcing, Buying, Selling, Logistics & Supplying division which are moving/dealings by the experienced leaders & team. The company established in 1995 in Dhaka.</p>
                    <div class="our-mission text-left py-3">
                        <p><b>Our Mission</b> - We are one passionate Sourcing/Importing/Supplying Team, always keeping, maintaining the customers demand and supplying team, schedule, committed to grow our business day by day.</p>
                    </div>
                    <div class="text-left py-3">
                        <h6>We Operate -</h6>
                        <ul>
                            <li>Customer Oriented</li>
                            <li>Clean Dealings</li>
                            <li>Quick Services</li>
                        </ul>
                        <p>To create value for our customers.</p>

                        <br><br>

                        <p><b>Direct Import as a Sources Factor</b> – With direct imports, better prices are achieved through buying directly at source and selling effect with higher quality, large quantities and services. Incomparable products and concentration on demand of the customers are developed in our own trade with the close collaboration with suppliers (exporters). Our rigorous quality control is established with actual testing of imported products, High quality any requirements and commitment of 100 percent suppliers are socially compliance. By utilizing  all potentials inherent in the procurement processes, coordination with the customers, logistics and the transparency of costs and benefits. <b>S. Chowdhury</b> Group succeeds in enhancing the overall import efficiency for its customers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About-us Area End -->



@endsection