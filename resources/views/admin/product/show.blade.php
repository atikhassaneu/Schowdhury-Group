@extends('admin.layout.master_layout')

@section('title','Product Details')

@section('content')
    <div class="row">
        <div class="col-md-7" style="margin: 50px;">
            <!-- Advanced Tables -->
            <div class="panel panel-default">

                <div class="panel-body">
                    <div>
                        <img width="100%" src="{{asset('uploads/product/'.$product->img_path)}}">
                    </div>

                    <div class="title">
                        <h3 style="padding: 10px 20px; font-weight: normal">{{$product->title}}</h3>
                    </div>

                    <div class="description">
                        <p style="padding: 5px 20px">{{$product->description}}</p>
                    </div>
                </div>

                <div class="panel-footer">
                    <a class="btn btn-primary" href="{{route('product.index')}}"><i class="fa fa-backward"></i></a>
                    <a class="btn btn-info" href="{{route('product.edit',$product->id)}}"><i class="fa fa-pencil"></i></a>
                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
    <!-- /. ROW  -->

@endsection
