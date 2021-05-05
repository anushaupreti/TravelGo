<style>
    table, th, td {
  border: 1px solid black;
}

</style>
Room list according to search result
<table>
    <th>Sn.</th>
    <th>Name</th>
    <th>Price</th>
    <th>Capacity</th>
    <th>Size</th>
    <th>Image</th>
    <th>Book now</th>
    @foreach ($roommgt as $rmg )
    <tr>
        <td>{{$rmg->rooms->id}}</td>
    <td>{{$rmg->rooms->roomname}}</td>
    <td>{{$rmg->rooms->price}}</td>
    <td>{{$rmg->rooms->children + $rmg->rooms->adult}}</td>
    <td>{{$rmg->rooms->size}}</td>
        <td><img src="{{asset($rmg->rooms->image)}}" width="200px;"></td>
    <td><a href="{{route('book',[$rmg->rooms->id,$rmg->rooms->roomname])}}">Book now</a></td>
    </tr>

@endforeach
</table>
