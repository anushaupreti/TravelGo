@extends('admin.main')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add new</h3>
              <p><span style="color:red;font-size:19px;">*</span> Fields are required</p>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="box-body">
             @if($errors->count()>0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
@endif

               <div class="form-group">
                  <label for="fullname">Title<span style="color:red;font-size:19px;">*</span></label>
                  <input type="text" class="form-control" name="title" id="name" placeholder="Title">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Image<span style="color:red;font-size:19px;">*</span></label>
                  <input type="file" class="form-control" name="image">
                </div>


            {{-- <div class="form-group">
                <label>Choose Category<span style="color:red;font-size:19px;">*</span></label>

                <select class="form-control select2" name="category" style="width: 100%;">
                @foreach ($category as $c )
                     <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach

                </select>
              </div> --}}


               <div class="form-group">
                  <label for="fullname">Date</label>
                  <input type="date" class="form-control" name="date" id="date" placeholder="Title">
                </div>

                  <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- /.box -->

          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">CK Editor
                <small>Advanced and full of features</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                    <textarea id="editor1" name="content" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                    </textarea>
              </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('blogs.index')}}" class="btn btn-warning">Back</a>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
