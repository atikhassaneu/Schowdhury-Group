@extends('admin.layout.master_layout')

@section('title','Edit Photo')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Edit Photo</h4>
                </div>
                <div class="panel-body">


                    <form action="{{route('gallery.update',$image->id)}}" role="form" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="slider-title">Image Caption</label>
                            <textarea name="caption" rows="3" class="form-control" id="slider-title">{{$image->caption}}</textarea>
                        </div>


                        <div class="form-group">
                            <label for="slider-image">Image 1800*1200</label>
                            <input id="slider-image" type="file" name="image" class="form-control" />
                        </div>

                        <button style="padding-left: 20px; padding-right: 20px; font-size: 18px; margin-top: 20px;" type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>

    </div>


@endsection
