@extends('admin.layout.master_layout')

@section('title','All Slider')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>All Sliders</h4>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="slider-dataTables">
                            <thead>
                                <tr>
                                    <th width="10%">Serial</th>
                                    <th width="40%">Title</th>
                                    <th width="35%">Image</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $key = 0?>
                                @foreach($sliders as $slider)

                                    <tr>
                                        <td>{{$key = $key + 1}}</td>
                                        <td>{{$slider->title}}</td>

                                        <td><img src="{{asset('uploads/slider/'.$slider->img_path)}}"  width="280px"></td>
                                        <td>
                                            <a href="{{route('slider.edit',$slider->id)}}" class="btn  btn-info"><i class="fa fa-pencil"></i></a>
                                            <a href="" class="btn  btn-danger" onclick="confirmDelete()"><i class="fa fa-trash-o"></i></a>

                                            <form action="{{route('slider.destroy',$slider->id)}}" id="{{'delete-form-'.$slider->id}}" method="post">
                                                @csrf
                                                @method('DELETE')

                                            </form>

                                            <script>
                                               function confirmDelete(){
                                                    if (confirm("Do you Want TO Delete?")){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{$slider->id}}').submit();
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
