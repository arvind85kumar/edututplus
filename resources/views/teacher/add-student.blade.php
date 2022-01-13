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
                        <form action="save-student" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="inputName">Course</label><span class="field-req">*</span>
                                <select class="form-control" name="course_id">
                                    <option value="">--Select Course --</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->cource_id }}">{{ $course->courses->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Student Name</label><span class="field-req">*</span>
                                <input type="text" id="inputName" name="name" value="{{ old('meeting_title') }}"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Phone</label><span class="field-req">*</span>
                                <input type="text" id="inputName" name="phone" value="{{ old('phone') }}"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Email</label>
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}" />
                            </div>
                            <div class="form-group">
                                <label for="inputName">Password</label><span class="field-req">*</span>
                                <input type="password" id="inputName" name="password" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Membership</label>
                                <select name="membership" class="form-control form-select">
                                    <option value="Basic">Basic User</option>
                                    <option value="Premium">Premium Member</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                    <input type="submit" value="Add Student" class="btn btn-success float-right">
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
    @push('script')
        <script type="text/javascript">
            $(document).ready(function(e) {
                //Date picker
                $('.meeting_start').datetimepicker({
                    icons: {
                        time: 'far fa-clock'
                    },
                    format: 'DD/MM/YYYY hh:mm a',
                    minDate: $.now()
                });
                $('.meeting_start').keypress(function(event) {
                    event.preventDefault();
                    return false;
                });

            });
        </script>
    @endpush
@endsection
