@foreach ($supplier as $s )
<p>{{$s->fullname}}</p>
<p>{{$s->email}}</p>
<p>{{$s->phone}}</p>
<a href="">Status</a>
@if ($s->status=1)
<a href="{{route('supplier.off',['id'=>$s->id])}}">Off</a>
    @else
    <a href="{{route('supplier.on',['id'=>$s->id])}}">On</a>
@endif
@endforeach
