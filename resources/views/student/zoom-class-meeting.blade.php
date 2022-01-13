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
                      <th>Course</th></th>
                      <th>Meeting Title</th></th>
                      <th>Join Class</th>
                      <th>Passcode</th>
                      <th>Create Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($meetings as $meeting)
                    <tr>
                      <td>{{$loop->iteration }}</td>
                      <td>{{$meeting->courses->name}}</td>
                      <td>{{$meeting->meeting_title}}</td>
                      <td><a target="_new" class="btn btn-primary" href="{{$meeting->join_url}}"><i class="fa fa-video"></i></a></td>
                      <td>{{$meeting->passcode}}</td>
                      <td>{{$meeting->created_at}}</td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="6"><div class="text-center h4">No data available</div></td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  {{$meetings->links()}}
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    @push('script')
<script type="text/javascript">
    function copyZoomCall(d) {
        var link=$(this).attr('data-url');
        var copyText = link;
        navigator.clipboard.writeText(copyText).then(function() {
        d.text='Copied';
        d.title="Copied";
        console.log('Async: Copying to clipboard was successful!');
        }, function(err) {
        console.error('Async: Could not copy text: ', err);
        });
    }
</script>
    @endpush
@endsection
