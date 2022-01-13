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
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Hospital Name</th>
                      <th>Phone</th></th>
                      <th>Address</th></th>
                      <th>Email</th>
                      <th>Tasks</th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($hospitals as $hospital)
                    <tr>
                      <td>{{$loop->iteration }}</td>
                      <td>{{$hospital->name}}</td>
                      <td>{{$hospital->phone}}</td>
                       <td>{{$hospital->address}}</td>
                      <td>{{$hospital->email}}</td>
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
                  {{$hospitals->links()}}
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
