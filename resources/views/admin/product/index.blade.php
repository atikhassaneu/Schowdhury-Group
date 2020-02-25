@extends('admin.layout.master_layout')

@section('title','All Products')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>All Products</h4>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="slider-dataTables">
                            <thead>
                                <tr>

                                    <th width="7%">Serial</th>
                                    <th width="70%">title</th>
                                    <th width="8%">Image</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $key => $product)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$product->title}}</td>
                                        <td><img src="{{asset('uploads/product/'.$product->img_path)}}" height="48px" width="48px"></td>
                                        <td>
                                            <a href="{{route('product.show',$product->id)}}" class="btn  btn-primary"><i class="fa fa-eye"></i></a>
                                            <a href="{{route('product.edit',$product->id)}}" class="btn  btn-info"><i class="fa fa-pencil"></i></a>
                                            <a href="" class="btn  btn-danger" onclick="confirmDelete()"><i class="fa fa-trash-o"></i></a>

                                            <form action="{{route('product.destroy',$product->id)}}" id="{{'delete-form-'.$product->id}}" method="post">
                                                @csrf
                                                @method('DELETE')

                                            </form>

                                            <script>
                                               function confirmDelete(){
                                                    if (confirm("Do you Want TO Delete?")){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{$product->id}}').submit();
                                                    }
                                                }

                                            </script>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
    <!-- /. ROW  -->

@endsection
