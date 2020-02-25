@extends('frontend.layout.master_layout')
@section('title','Contact')
@section('content')

<!-- Hero Area Start -->
<section class="hero-area" style="background: url({{asset('frontend/assets/img/contact_cover.jpg')}});background-size: cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="hero-info">
                    <h2>Contact Us</h2>
                    <a href="{{route('index')}}">Home <i class="fa fa-angle-right"></i></a><span>Contact Us</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Area End -->

<!-- Our Contact Area Start -->
<section class="our-contact-area section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="project-title">
                    <h2><span>Contact </span>us</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="contact-address-bar">
                    <i class="fa fa-phone"></i>
                    <div class="contact-text">
                        <h5>Telephone</h5>
                        <p>+880-2-9134564</p>
                        <p>9146464</p>
                        <p>Fax : +880-2-9134577</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="contact-address-bar">
                    <i class="fa fa-envelope"></i>
                    <div class="contact-text">
                        <h5>Email</h5>
                        <p>choenterprise@yahoo.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="contact-address-bar">
                    <i class="fa fa-globe"></i>
                    <div class="contact-text">
                        <h5>Website</h5>
                        <p>www.schowdhurygroup.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="contact-address-bar">
                    <i class="fa fa-map-marker"></i>
                    <div class="contact-text">
                        <h5>Our Location</h5>
                        <p>Rupayan Z.R. Plaza (8th Floor)</p> <p> 746 Satmasjid Road</p><p>Dhanmondi New – 9/A, Old -19 </p> <p> Dhaka – 1209, Bangladesh</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Contact-Us Area End -->



<!-- Contact-message Area Start -->
<div class="contact-message section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form">
                    <form action="{{route('contact.store')}}" method="post" class="form-group">
                        @csrf
                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                        <input type="email" name="email" class="form-control" placeholder="Your E-mail">
                        <textarea name="message" id="message" placeholder="Write your message" class="form-control" rows="5"></textarea>
                        {!! NoCaptcha::display() !!}
                        <br><br>

                        <button class="contact-btn message-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d228.2525397520819!2d90.37114500000094!3d23.74593028386631!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf4c136fe703%3A0x2bfeae42f4ee1c8e!2sRUPAYAN+ZR+PLAZA!5e0!3m2!1sen!2sbd!4v1535785778380" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>


@endsection