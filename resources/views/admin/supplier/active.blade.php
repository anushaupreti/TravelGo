@foreach ($active_supplier as $as )
<p>{{$as->fullname}}</p>
<p>{{$as->email}}</p>
<p>{{$as->phone}}</p>
<a href="">Status</a>
<a href="{{route('supplier.edit',['id'=>$as->id])}}">Add</a>
@endforeach
