  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<h1 style="text-align:center;">Hotel List Search by state/city/location</h1>
<form action="{{route('room_search')}}">
    <h2>Search Room of the given Hotel</h2>
Checkin:<input type="datetime-local" name="checkin" class="checkin">
Checkout:<input type="datetime-local" name="checkout">
@foreach ($room as $r )
<input type="hidden" value={{$r->id}} name="hotel_id[]">
@endforeach
<button type="submit" id="check">Check</button>
</form>
<br>
@foreach ($room as $r )
{{$r->name}}
<img src="{{asset($r->featured)}}">
<form>
<a href="{{route('allrooms',[$r->id,$r->name])}}">View Hotel Rooms</a>
</form>

@endforeach
{{-- <script>
    $(document).ready(function(){
       $('#check').click(function()
       {
        var checkin=$(".checkin").val();
             $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
             });
           $.ajax({
               method:'get',
               url:"{{route('room_search')}}",
               dataType:'json',
               data:{
                   data:checkin
               },
               success:function(response)
               {
                   alert(response);
                   console.log(resoinse);
               }

           });

       });

    });
</script> --}}

