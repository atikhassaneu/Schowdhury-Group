@extends('admin.layout.master_layout')

@section('title','Contact Details')

@section('content')
    <div class="row">
        <div class="col-md-7" style="margin: 50px;">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5>Contact Info</h5>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">

                            <tbody>
                            <tr>
                                <td width="15%">Name  </td>
                                <td>{{$contact->name}}</td>
                            </tr>
                            <tr>
                                <td>Email  </td>
                                <td>{{$contact->email}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Message </td>
                            </tr>
                            <tr>
                                <td colspan="2">{{$contact->message}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="panel-footer">
                    <a class="btn btn-primary" href="{{route('contact.index')}}"><i class="fa fa-backward"></i></a>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
    <!-- /. ROW  -->

@endsection
