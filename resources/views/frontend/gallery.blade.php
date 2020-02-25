@extends('frontend.layout.master_layout')
@section('title','Gallery')
@section('content')



        <!--====== Market Project area Start ======-->
        <section class="market-project-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="project-title">
                            <h2><span>Photo</span> Gallery</h2>
                        </div>
                    </div>
                </div>
                <div class="row margin-top-15">
                    @foreach($gallery as $image)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="project-single-box">

                                <div class="project-photo">
                                    <a href="{{asset('uploads/gallery/'.$image->slug)}}" data-lightbox="gallery" data-title="{{$image->caption}}" > <img src="{{asset('uploads/gallery/'.$image->slug)}}"></a>
                                </div>

                            </div><!-- project-single-box -->
                        </div><!-- col -->
                    @endforeach
                </div>
            </div>
        </section>
        <!--====== Market Project area End ======-->


@endsection