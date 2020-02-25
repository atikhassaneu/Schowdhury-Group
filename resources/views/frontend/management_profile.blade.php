@extends('frontend.layout.master_layout')
@section('title','Company Profile')
@section('content')
<!--======Services Section Area Start ======-->
<!-- Hero Area Start -->
<section class="hero-area" style="background: url({{asset('frontend/assets/img/management_profile_cover.jpg')}});background-size: cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="hero-info">
                    <h2>Management Profile</h2>
                    <a href="{{route('index')}}">Home <i class="fa fa-angle-right"></i></a><span>Management Profile</span>
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

                    <div class="intro text-left">
                        <h3>Mr. Sudhir Chowdhury</h3>
                        <p>Managing Director</p>
                    </div>
                    <div class="about py-3 text-left">
                        <p>
                            Mr. Sudhir Chowdhury was born on 16th January 1960 in a respectable Chowdhury family. He completed his graduation (B.com Honrs) under Dhaka university. After completion of education he devoted himself in the line of business as trading company named “M/S. Chowdhury Enterprise”  and has been succeeding the business day by day by his own activities and by keeping good commitment. Now the company is well reputed in the line of business chain. During the year of 2008 he formed a Joint venture (Bangladesh – India) company named KBC Agro Products Private Ltd. (it’s a first graded Rice Bran Oil Extraction Plant in Bangladesh) and he represent the company as a Managing Director.
                        </p>
                        <p class="py-3">
                            Now Mr. Sudhir Chowdhury is an industrialist businessman of Bangladesh. He is in the link chain of Import, Export and all kinds of business since 1990 with good reputation in the market. He import huge raw materials of poultry and fish feed (i,e, Maize, Soy meal, DORB, DDGS, Rapeseed, MBM, Lime stone, Fish Meal, Wheat, Lentils, Chickpeas, etc.) and many more commodities of human consumption and supply them to various customer in the local market. Due to import of quality poultry and fish feed ingredients and continues supply on reasonable price to the customer all the year round S. Chowdhury Group captured the market remarkably.
                        </p>

                        <p class="py-3">
                            With his inherent quality of leadership and pragmatic outlook, he became of the group’s of directors within very short time. He played a vital role in incorporating the business technique that made the group’s activities prompt and easier. It entirely changes the traditional mode of procurement of business – Production, Trading, Import/Export and initial communications systems.
                        </p>

                        <p class="py-3">
                            He always involves himself in the group’s function, productive and financial streams. Mr. Sudhir Chowdhury’s  diverse quality as Managing Director of S.Chowdhury Group’s key unit have made all the companies profitable. The Units Include.
                        </p>



                        <ul class="text-left py-2">
                            <li><b>M/S. Chowdhury Enterprise.</b></li>
                            <li><b>M/S. Chowdhury & Brothers.</b></li>
                            <li><b>Chowdhury Food & Feed Agro Industries Ltd. </b></li>
                            <li><b>SNB Food & Agro Industries Ltd.</b></li>
                            <li><b>Trade Link.</b></li>
                        </ul>

                        <p class="py-3">
                            Mr. Sudhir Chowdhury is the Managing Director of  Chowdhury  Food & Feed Agro Industries Ltd.  and SNB Food & Agro  Industries Ltd. He also actively engaged with BAFITA (Bangladesh Agro Feed Ingredient Traders Association) as President as well as he is a social worker and patron of learning of his country. He is the member of managing committee of several educational institute of the country. He always help orphanage and disable people. He donates in the development/renovation work of Mondir/Mosque and educational institute of his country.
                        </p>

                        <p class="py-3">
                            Chairman : Mrs. Shilpi Chowdhury<br>
                            Managing Directory : Sudhir Chowdhury<br>
                            Director : Priyanka Chowdhury & Rinki Chowdhury.<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About-us Area End -->



@endsection