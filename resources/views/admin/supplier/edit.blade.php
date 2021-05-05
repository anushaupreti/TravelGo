<form action="{{route('supplier.update',['id'=>$supplier->id])}}" method="post">
    @csrf
<a href="{{route('suppiler.on')}}">On</a>
    <button type="submit">Submit</button>
</form>
