@extends('admin.layout.master_layout')

@section('title','Password Change')

@section('content')
    <div class="row">
        <div class="col-md-10" style="margin: 50px;">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5>Password Change</h5>
                </div>
                <form action="{{route('password_change.update')}}" method="post">
                    @csrf

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table change_password_table">

                                <tbody>
                                    <tr>
                                        <td width="20%"><label for="old_password">Old Password</label></td>
                                        <td><input id="old_password" type="text" name="old_password" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="new_password">New Password</label></td>
                                        <td><input id="new_password" type="password" name="new_password" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="confirm_password">Confirm Password</label></td>
                                        <td><input id="confirm_password" type="password" name="confirm_password" class="form-control"></td>
                                    </tr>
                                 </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="panel-footer">
                        <input type="submit" class="btn btn-primary" value="Change password">

                    </div>
                </form>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
    <!-- /. ROW  -->

@endsection
