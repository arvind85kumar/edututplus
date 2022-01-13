@extends('template.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Register New User</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('common.flash-message')
                        <form action="save-user" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="inputName">Name</label><span class="field-req">*</span>
                                <input type="text" id="inputName" name="name" value="{{ old('name') }}"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Email</label><span class="field-req">*</span>
                                <input type="text" id="inputName" name="email" value="{{ old('email') }}"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Phone</label><span class="field-req">*</span>
                                <input type="text" id="inputName" name="phone" value="{{ old('phone') }}"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Password</label><span class="field-req">*</span>
                                <input type="password" id="inputName" name="password" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Address</label>
                                <textarea id="inputDescription" name="address" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Role</label><span class="field-req">*</span>
                                <select id="inputStatus" name="role_id" class="form-control custom-select">
                                    <option value="">--Select Role--</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->role }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Status</label>
                                <select id="inputStatus" name="status" class="form-control custom-select">
                                    <option value="">--Select Status--</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">InActive</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                    <input type="submit" value="Create new user" class="btn btn-success float-right">
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
    <!-- /.content -->

    <!-- /.content-wrapper -->
@endsection
