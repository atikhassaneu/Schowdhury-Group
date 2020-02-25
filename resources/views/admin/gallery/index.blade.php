@extends('admin.layout.master_layout')

@section('title','All Photos')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>All Photos</h4>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="slider-dataTables">
                            <thead>
                                <tr>

                                    <th width="40%">Caption</th>
                                    <th width="30%">Image</th>
                                    <th width="30%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($gallery as $image)
                                    <tr>
                                        <td>{{$image->caption}}</td>

                                        <td><img src="{{asset('uploads/gallery/'.$image->slug)}}" height="72px" width="128px"></td>
                                        <td>
                                            <a href="{{route('gallery.edit',$image->id)}}" class="btn  btn-info"><i class="fa fa-pencil"></i></a>
                                            <a href="" class="btn  btn-danger" onclick="confirmDelete()"><i class="fa fa-trash-o"></i></a>

                                            <form action="{{route('gallery.destroy',$image->id)}}" id="{{'delete-form-'.$image->id}}" method="post">
                                                @csrf
                                                @method('DELETE')

                                            </form>

                                            <script>
                                               function confirmDelete(){
                                                    if (confirm("Do you Want TO Delete?")){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{$image->id}}').submit();
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
