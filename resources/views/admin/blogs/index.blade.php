@extends('admin.main')
@section('css')
<style>
.box{
  width: 100%!important;
  position: absolute!important;
  right: 30%!important;

}
</style>
@endsection
@section('content')
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
            <a href="{{route('blogs.create')}}" class="btn btn-success">Add New</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @if(session('success'))
          <div class="alert alert-success alert-dismissible">
          <p>{{session('success')}}</p>
          </div>
          @endif
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($blogs as $b)
                      <tr>
                  <td>{{$loop->index +1}}</td>
                  <td>{{$b->title}}</td>
                  {{-- <td>
                  @foreach ($b->categories as $c )
                      {{$c->name}}
                  @endforeach
                  </td> --}}
                  <td><img src="{{asset($b->image)}}" width="100px;" height="100px;" class="img-thumbnail"></td>
                <td><a href="{{route('blogs.edit',['id'=>$b->id])}}">Edit</a></td>
                  <td>
                    <form action="{{route('blogs.destroy',['id'=>$b->id])}}" id="form-data-{{$b->id}}" method="POST">
                  @csrf
                  {{ method_field('DELETE') }}
                  </form>
                  <a href="" onclick="if(confirm('Are you sure want to delete'))
                  {
                      event.preventDefault();
                      document.getElementById('form-data-{{$b->id}}').submit();}
                      else{
                          event.preventDefault();
                      }
                      ">
                       {{-- <span class="fa fa-trash" style="color:#3C8DBC;font-size:21px; margin-left:10%;"></span> --}}
                      Delete
                  </a>
                  </td>
                </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
