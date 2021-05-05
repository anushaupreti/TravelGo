<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<h2>Book Hotel</h2>
<form method="post" action="{{route('confirm')}}">
    @csrf
<input type="hidden" name="capacity" value={{$room->children + $room->adult}}>
<input type="hidden" name="price" id="price" value="{{$room->price}}">

 <input type="hidden" name="id" id="id" value={{$room->id}}>
<input type="date" name="checkin" id="checkin" value="<?php echo date('Y-m-d'); ?>">
<input type="date" name="checkout" id="checkout" value="<?php echo date('Y-m-d', strtotime("+$room->day days")); ?>">
 <select name="children" id="children">
             <option value=""> Addition No Of Children</option>
             <option value="1">1</option>
             <option value="2" >2</option>
              <option value="3">3</option>
         </select>

         <select name="adult" id="adult">
             <option value=""> Addition No Of Adult</option>
             <option value="1">1</option>
             <option value="2" >2</option>
              <option value="3">3</option>
         </select>
         <button  id="apply">Apply</button>
         <button type="submit">Confirm</button>
</form>
Roomname:{{$room->roomname}}
<br>
<div class="price">Price:{{$room->price}}</div>
<div id="msg"></div>
<br>
<img src="{{asset($room->image)}}">
<script>
@if (session('alert'))
    swal("{{ session('alert') }}");
@endif
</script>
<!-- include the script -->
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function()
    {
        $('#apply').on('click',function(e)
        {
            e.preventDefault();
            var children=document.getElementById('children').value;
            var id=document.getElementById('id').value;
            var checkin=document.getElementById('checkin').value;
            var checkout=document.getElementById('checkout').value;
            var adult=document.getElementById('adult').value;
             var price=document.getElementById('price').value;
             var msg=document.getElementById('msg');
           $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
             });
             var op="";
        $.ajax({
            type:'GET',
            url:"{{route('apply')}}",
              dataType:'json',
                data:{
                    'price':price,
                    'children':children,
                    'id':id,
                    'checkin':checkin,
                    'checkout':checkout,
                    'adult':adult,

                },
                success:function(data)
                {
                    console.log(data);
                    console.log(data.status);
                    op+='<span>'+ data +'</span>';
                    if(data.status==0)
                    {
                          $('#msg').html(data.msg);

                    }
                    else{
                         $('.price').html('Price:'+data);
                          $('#msg').remove();
                          alertify.set('notifier','position', 'top-right');
 alertify.success('Total price: '+data+ ' according to selected field.');

                    }

                }
                 });
        });

    });
    </script>
