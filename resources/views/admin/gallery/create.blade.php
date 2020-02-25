@extends('admin.layout.master_layout')

@section('title','Add A New Photo')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Add A New Photo</h4>
                </div>
                <div class="panel-body">


                    <form action="{{route('gallery.store')}}" role="form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="gallery-title">Image caption</label>
                           <textarea name="caption" rows="3" class="form-control" id="gallery-title"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="gallery-image">Gallery Image 1800*1200</label>
                            <input id="gallery-image" type="file" name="image" class="form-control" />
                        </div>

                        <button style="padding-left: 20px; padding-right: 20px; font-size: 18px; margin-top: 20px;" type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>

    </div>


@endsection
