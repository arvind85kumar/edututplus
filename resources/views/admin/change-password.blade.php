@extends('template.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add New Student</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('common.flash-message')
                        <form action="update-password" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="inputName">New Password:</label><span class="field-req">*</span>
         <input type="password" id="inputName" placeholder="Please enter new password" name="newpassword"" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Confirm Password:</label><span class="field-req">*</span>
                                <input type="password" placeholder="Please confirm password same as above" id="inputName" name="confirmpass" value=""
                                    class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                    <input type="submit" value="Change Password" class="btn btn-success float-right">
                                </div>
                            </div>
                    </div>
                    </form>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

        </div>
    </section>
@endsection
