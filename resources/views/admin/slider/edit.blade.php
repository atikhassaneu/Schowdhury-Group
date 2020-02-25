@extends('admin.layout.master_layout')

@section('title','Edit Slider')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Edit Slider</h4>
                </div>
                <div class="panel-body">


                    <form action="{{route('slider.update',$slider->id)}}" role="form" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="slider-title">Slider Title</label>
                            <textarea name="title" rows="3" class="form-control" id="slider-title">{{$slider->title}}</textarea>
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label for="slider-heading">Slider Heading</label>--}}
                            {{--<textarea rows="5" name="heading" class="form-control" id="slider-heading">{{$slider->heading}}</textarea>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="slider-subtitle">Slider Subtitle</label>--}}
                            {{--<textarea rows="3" name="subtitle" class="form-control" id="slider-subtitle">{{$slider->subtitle}}</textarea>--}}
                        {{--</div>--}}

                        <div class="form-group">
                            <label for="slider-image">Slider Image 1200*400</label>
                            <input id="slider-image" type="file" name="image" class="form-control" />
                        </div>

                        <button style="padding-left: 20px; padding-right: 20px; font-size: 18px; margin-top: 20px;" type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>

    </div>


@endsection
