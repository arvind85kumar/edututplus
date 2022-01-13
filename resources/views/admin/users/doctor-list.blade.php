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
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-responsive">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Doctor Name</th>
                      <th>Phone</th></th>
                      <th>City</th></th>
                      <th>Speciality</th>
                      <th>Experience</th></th>
                      <th>Fee</th></th>
                      <th>Available Time</th></th>
                      <th>Tasks</th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($doctors as $doctor)
                    <tr>
                      <td>{{$loop->iteration }}</td>
                      <td>{{$doctor->user->name}}</td>
                      <td>{{$doctor->user->phone}}</td>
                       <td>{{$doctor->city->city}}</td>
                      <td>{{$doctor->specialty->type}}</td>
                      <td>{{$doctor->experience}}</td>
                      <td>{{$doctor->consulting_fee}}</td>
                      <td>{{$doctor->availability_time}}</td>
                      <td><a title="View Profile" class="btn btn-success" href=""><i class="fa fa-search"></i></a>
                        <a title="Edit Profile" class="btn btn-info" href=""><i class="fa fa-edit"></i></a>
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
                  {{$doctors->links()}}
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
