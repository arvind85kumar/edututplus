@extends('template.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Book New Meeting</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('common.flash-message')
                        <form action="save-meeting" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="inputName">Course</label><span class="field-req">*</span>
                                <select class="form-control" name="course_id">
                                    <option value="">--Select Course --</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->courses->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Meeting Title</label><span class="field-req">*</span>
                                <input type="text" id="inputName" name="meeting_title" placeholder="Enter Meeting Title"
                                    value="{{ old('meeting_title') }}" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                    <input type="submit" value="Book New Meeting" class="btn btn-success float-right">
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
