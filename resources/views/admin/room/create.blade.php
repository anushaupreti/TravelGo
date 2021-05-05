@extends('admin.main')
@section('content')
  <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Add Rooms
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
                                <form action="{{route('room.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf



                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" placeholder="Room name" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="type" placeholder="Room type" />
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="size" placeholder="Room size" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="description" placeholder="Description..."></textarea>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="bed" placeholder="Bed" />
                                        </div>
                                    </div>


                                     <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="price" placeholder="Price" />
                                        </div>
                                    </div>

                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="children" placeholder="No Of Children" />
                                        </div>
                                    </div>


                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="adult" placeholder="No Of Adults" />
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="extchildren" placeholder="Extra Children Amount" />
                                        </div>
                                    </div>


                                     <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="extadult" placeholder="Extra Adult Amount" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="day" placeholder="Day" />
                                        </div>
                                    </div>

                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="per_day" placeholder="Day" />
                                        </div>
                                    </div>


                                      <div class="form-group">
                           <div class="demo-checkbox">
                               @foreach ($facility as $f )
                           <input type="checkbox" id="md_checkbox_{{$f->id}}" name="facility[]" value="{{$f->id}}" class="filled-in chk-col-red" checked />
                           <label for="md_checkbox_{{$f->id}}">{{$f->name}}</label>
                               @endforeach
                            </div>
                         </div>

                          <div class="form-group">
                          <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="form-control show-tick" name="hotel">
                                        <option value="">-- select Hotel --</option>
                                        @foreach ($hotel as $h )
                                    <option value="{{$h->id}}">{{$h->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <p>Room Photos</p>
                                <div class="fallback">
                                    <input name="featured" type="file" multiple />
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
