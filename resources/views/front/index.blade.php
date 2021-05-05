<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <h1>Search By Category</h1>
    <form action="{{route('category')}}">
              <select name="category">
                   <option value="">Category</option>
                  @foreach ($category as $c )
              <option value="{{$c->name}}">{{$c->name}}</option>
                  @endforeach
         </select>
        <input type="submit" value="search">
        </form>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">

                </div>


                  @foreach($hotel as $r)
            <img src="{{asset($r->featured)}}" style="width:300px;height:300px;">
                <p>Type:{{$r->type}}</p>
                <p>Hotelname:{{$r->name}}</p>
                <p>City:{{$r->city}}</p>
                <p>State:{{$r->state}}</p>
                <p>Location:{{$r->location}}</p>
            {{-- <a href="{{route('allrooms',['id'=>$r->id])}}">View Rooms</a> --}}

                    @endforeach
                       <div>
                      <form action="{{route('hotel_search')}}" style="margin-top:10%;">
                        <h1>Search by state /city and location</h1>
                      <a href="{{route('supplier.create')}}">List Your Hotel</a>
              <select name="state" id="state">
                   <option value="">State</option>
                  @foreach ($hotel->unique('state') as $h )
              <option value="{{$h->state}}">{{$h->state}}</option>
                  @endforeach
         </select>
          <select name="city" class="city">
            <option value="0" selected Disable>Select city</option>
         </select>
         <input type="text" name="location" id='city' placeholder="location">
         <button type="submit"><a>Hotel search</a></button>
        </form>
        </div>
            </div>
        </div>
    </body>
    <script>
        $(document).ready(function(){
          $('#state').change(function(){
              var value=$(this).val();
                $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
             });
             var div=$(this).parent();
             var op="";
            $.ajax({
                type:"GET",
                url:"{{route('locationsearch')}}",
                dataType:'json',
                data:{
                    'data':value
                },
                success:function(data)
                {
                    console.log(data);
                //    op+='<option value="0" Selected Disable>Select location</option>';
                   for(var i=0;i<data.length;i++)
                   {
                        console.log(data[i].id);
                       op+='<option value="'+data[i].city+'">'+data[i].city+'</option>';
                   }
                   div.find('.city').html("");
                   div.find('.city').append(op);
                }
            });
          });
        });
    </script>
</html>

