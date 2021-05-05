@extends('admin.main')
@section('content')
  <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            Manage <b>{{$room->type}}</b> Room
                                <small>Please Fill Out the All Fileds</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Room Details</h2>
                            @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
 @endif
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                <form action="{{route('roommanagement.store')}}" method="POST">
                                    @csrf
                                <input type="hidden" name="roomid" value="{{$roomid}}">
                       <div class="form-group">
                                        <div class="form-line">
                                            <input type="datetime-local" class="form-control" name="start" placeholder="Start" />
                                        </div>
                                    </div>



                       <div class="form-group">
                                        <div class="form-line">
                                            <input type="datetime-local" class="form-control" name="end" placeholder="End" />
                                        </div>
                                    </div>



                        <div class="form-group">
                          <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="form-control show-tick" name="status">
                                        <option value="">-- select Status --</option>
                                        <option value="1">Available</option>
                                          <option value="0">Unavailable</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                            <button class="btn btn-primary waves-effect" type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
@endsection
