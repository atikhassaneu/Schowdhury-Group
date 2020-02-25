@extends('frontend.layout.master_layout')
@section('title','S Chowdhury Group')
@section('content')
<!--====== Home Top slider Start======-->
<section class="owl-carousel owl-theme home-top-slider">
    @foreach($sliders as $slider)
    <div class="slider-content">
                <img src="{{asset('uploads/slider/'.$slider->img_path)}}">
    </div>
    @endforeach

</section>
<!--====== Home Top slider End ======-->

<!--====== Market Project area Start ======-->
<section class="services-area section-padding">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-6 ">
                <div class="services-single-box wow fadeInLeft  service-min-height animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="services-icon">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <h4>Business Activities</h4>
                    <p class="text-justify">S. Chowdhury Group always intent to sourcing updated products commodities &amp; all new grain capturing successfully. Deal with best quality commodities, strong logistic support, and super strength manpower who are more efficient &amp; experienced. Excellent customer dealing &amp; prompt services. The company is focused on good corporate governance and intends to achieve standards comparable.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="services-single-box wow fadeInLeft  service-min-height animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="services-icon">
                        <i class="fa fa-university"></i>
                    </div>
                    <h4>Professional Approach</h4>
                    <p class="text-justify">The company has been taking care about customer’s demand and keep them priority.  Moreover, the company could capable to keep the big contract to supply the large volume merchandise.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="services-single-box wow fadeInLeft  service-min-height animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="services-icon">
                        <i class="fa fa-bar-chart"></i>
                    </div>
                    <h4>Marketing Network</h4>
                    <p class="text-justify">S.Chowdhury Group has already developed a strong marketing network in the local market of Bangladesh, covering all prominent manufacturers/mills with efficient marketing team and a network of dealers/agents.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!--====== Market Project area End ======-->

<!--====== Market Project area Start ======-->
<section class="market-project-area section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="project-title">
                    <h2><span>Featured</span> Products</h2>
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


<!--====== Counter Area Start ======-->
<section class="counter-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-single-box text-center">
                    <i class="fa fa-desktop"></i>
                    <p>Total <span>Products</span></p>
                    <h2 class="counter">{{$products_count}}</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-single-box text-center">
                    <i class="fa fa-smile-o"></i>
                    <p>Happy<span>Clients</span></p>
                    <h2 class="counter">200</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-single-box text-center">
                    <i class="fa fa-users"></i>
                    <p>Empl<span>oyees</span></p>
                    <h2 class="counter">117</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-single-box text-center">
                    <i class="fa fa-trophy"></i>
                    <p>Awa<span>rds</span></p>
                    <h2 class="counter">150</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Counter Area End ======-->


<!--====== Mission Area Start ======-->
<section class="mission-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="mission-content">
                    <h4>Our mission</h4>
                    <p>We are one passionate Sourcing/Importing/Supplying Team, always keeping, maintaining the customers demand and supplying team, schedule, committed to grow our business day by day.</p>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="mission-progress-bar">
                    <div class="skillbar clearfix " data-percent="90%">
                        <div class="skillbar-title">Market Research</div>
                        <div class="skillbar-bar" style="background: #3FA65B;"></div>
                        <div class="skill-bar-percent">90%</div>
                    </div> <!-- End Skill Bar -->
                    <div class="skillbar clearfix " data-percent="85%">
                        <div class="skillbar-title">Sales Services</div>
                        <div class="skillbar-bar" style="background: #3FA65B;"></div>
                        <div class="skill-bar-percent">85%</div>
                    </div> <!-- End Skill Bar -->
                    <div class="skillbar clearfix " data-percent="50%">
                        <div class="skillbar-title">Online Reputation</div>
                        <div class="skillbar-bar" style="background: #3FA65B;"></div>
                        <div class="skill-bar-percent">50%</div>
                    </div> <!-- End Skill Bar -->
                    <div class="skillbar clearfix " data-percent="95%">
                        <div class="skillbar-title">Products Quality</div>
                        <div class="skillbar-bar" style="background: #3FA65B;"></div>
                        <div class="skill-bar-percent">A - A+</div>
                    </div> <!-- End Skill Bar -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Mission Area End ======-->

@endsection
