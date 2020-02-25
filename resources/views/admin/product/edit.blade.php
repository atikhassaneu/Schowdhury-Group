@extends('admin.layout.master_layout')

@section('title','Edit Product')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Edit Product</h4>
                </div>
                <div class="panel-body">


                    <form action="{{route('product.update',$product->id)}}" role="form" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="product-title">Product Title</label>
                            <textarea name="title" rows="3" class="form-control" id="product-title">{{$product->title}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="product-heading">Product Description</label>
                            <textarea rows="8" name="description" class="form-control" id="product-heading">{{$product->description}}</textarea>
                        </div>


                        <div class="form-group">
                            <label for="product-image">Product Image 500*400</label>
                            <input id="product-image" type="file" name="image" class="form-control" />
                        </div>

                        <button style="padding-left: 20px; padding-right: 20px; font-size: 18px; margin-top: 20px;" type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>

    </div>


@endsection
