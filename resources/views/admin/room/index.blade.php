@extends('admin.main')
@section('content')
  <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EXPORTABLE TABLE
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Room</th>
                                            <th>Type</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Manage</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Room</th>
                                            <th>Type</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Manage</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @if($room->count()>0)
                                        @foreach ($room as $r )
                                             <tr>
                                             <td>{{$r->roomname}}</td>
                                             <td>{{$r->type}}</td>
                                             <td>{{$r->price}}</td>
                                             <td><img src="{{asset($r->image)}}" width="100px;"></td>
                                             <td>
                                                 <form><a href="{{route('roommanagement.create',['id'=>$r->id])}}">Manage</a></form></td>
                                            <td>$320,800</td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td>No Room  Find</td>
                                        </tr>
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
@endsection
