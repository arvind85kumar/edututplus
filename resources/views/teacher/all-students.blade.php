@extends('template.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{$page['page_title']}}</h3>
                <a class="btn btn-success float-right" href="{{url('add-student')}}"><i class="fa fa-plus-square"></i>  Add New student</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Student Name</th>
                      <th>Course</th></th>
                      <th>Phone</th></th>
                      <th>Membership</th>
                      <th>Payment Status</th>
                      <th>Account Status</th>
                      <th>Create Date</th>
                      <th>Tasks</th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($students as $student)
                    <tr>
                      <td>{{$loop->iteration }}</td>
                      <td>{{$student->student->name}}</td>
                      <td>{{$student->course->name}}</td>
                      <td>{{$student->student->phone}}</td>
                       <td>{{$student->membership->membership_type}}</td>
                      <td>{{$student->payment_status}}</td>
                      <td>{{$student->student->status}}</td>
                      <td>{{$student->created_at}}</td>
                      <td><a title="View Profile" class="btn btn-success" href=""><i class="fa fa-search"></i></a>
                        
                        <a title="Delete Profile" class="btn btn-danger" href=""><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="6"><span class="badge bg-warning">No data available</span></td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  {{$students->links()}}
                </ul>
              </div>
            </div>
   

          </div>
         
        </div>
        <!-- /.row -->

        
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- /.content-wrapper -->
@endsection
