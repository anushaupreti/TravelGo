@extends('admin.main')
@section('content')
  <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Add Facility
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
                            <h2 class="card-inside-title">Facility Details</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                <form action="{{route('hotel.store')}}" method="POST" enctype="multipart/form-data">
                                        <h2 class="card-inside-title">Room Details</h2>
                            @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
 @endif
                                    @csrf

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" placeholder="Name" />
                                        </div>
                                    </div>

                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="type" placeholder="Type" />
                                        </div>
                                    </div>

                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="city" placeholder="city" />
                                        </div>
                                    </div>

                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="state" placeholder="State" />
                                        </div>
                                    </div>

                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="location" placeholder="location" />
                                        </div>
                                    </div>


                                       <div class="form-group">
                          <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="form-control show-tick" name="hotel">
                                        <option value="">-- select Category --</option>
                                        @foreach ($category as $c )
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="form-control show-tick" name="package">
                                        <option value="">-- select Package--</option>
                                        @foreach ($package as $p )
                                    <option value="{{$p->id}}">{{$p->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" class="form-control" name="featured" />
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
