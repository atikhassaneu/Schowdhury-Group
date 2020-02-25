<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{asset('frontend/assets/img/logo.png')}}" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- all css here -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">

</head>
<body>


<!--====== Header Area Start ======-->
<header class="header-area">

    <div class="main-header">
        <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark main-nav">
            <div class="container">
                <a class="navbar-brand" href="{{route('index')}}"> <img class="logo" src="{{asset('frontend/assets/img/logo.png')}}"><b class="brand-name"><span> S Chowdhury</span> Group </b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link @if(Request::is('index*')) {{'active'}} @endif @if(Request::is('/')) {{'active'}} @endif " href="{{route('index')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Request::is('products*')) {{'active'}} @endif " href="{{route('products')}}">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Request::is('services*')) {{'active'}} @endif " href="{{route('services')}}">Services</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Source
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('source')}}">Abroad & Domestics</a>

                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logistics')}}">Logistics</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About Us
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('company_profile')}}">Company Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('management_profile')}}">Management Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('gallery')}}">Gallery</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('reference')}}">Reference </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('contact')}}">Contact us </a>
                            </div>
                        </li>






                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--====== Header Area End ======-->








@yield('content')













<!--====== Footer Area Start ======-->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer-info">
                    <h2><a href="{{route('index')}}"><span>Schowdhury</span>Group</a></h2>
                    <p><b>“S. Chowdhury Group”</b> with its corporate office in Dhanmondi, Dhaka, Bangladesh, is a reputed “Trading House”.</p>
                    <ul class="footer-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- <div class="footer-info">
                    <h3>Quick Links</h3>
                    <ul class="footer-link">
                        <li><a href="#"><i class="fa fa-caret-right"></i>Strategic Consulting</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i>Sales Services</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i>Market Research</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i>Online Reputation</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i>Strategic Consulting</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i>Sales Services</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i>Market Research</a></li>
                    </ul>
                </div> -->
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="footer-info">
                    <h3>Subscribe</h3>

                    <form action="">
                        <input type="email" name="email" class="form-control" placeholder="Email address">
                        <input type="submit" name="submit" class="form-control">
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-bottom">
                    <p class="text-center">copyright <i class="fa fa-copyright"></i>2018 <br><span><span>Schowdhury</span>Group all rights reserved.</span></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--====== Footer Area End ======-->


<!-- all js here -->

<script src="{{asset('frontend/assets/js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/counterup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/lightbox.min.js')}}"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="{{asset('frontend/assets/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



@if ($errors->any())

    @foreach ($errors->all() as $error)
        <script>
            toastr.error('{{$error}}');
        </script>
    @endforeach

@endif

{!! Toastr::message() !!}


</body>
</html>

