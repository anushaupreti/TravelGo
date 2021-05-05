<div class="row">
    @foreach ($room as $r )
        <div class="col-lg-6">
<img src="{{asset($r->image)}}" style="width:200px;height:200px;">
<p>{{$r->type}}</p>
<p>{{$r->children + $r->adult}}</p>
</div>
    @endforeach
     <div class="col-lg-6">
     <form action="{{route('roomcheck')}}" method="get">
          <input type="date" placeholder="CheckIn" name="checkin" value="<?php echo date('Y-m-d'); ?>" >
         <input type="date" placeholder="CheckOut" name="checkout" value="<?php echo date('Y-m-d', strtotime("+2 days")); ?>">
        Guest
         <input type="text" name="capacity" value="" readonly="readonly">
         {{-- Addition
         <select name="children">
             <option value="">No Of Children</option>
             <option value="1">1</option>
             <option value="2" >2</option>
              <option value="3">3</option>
         </select>

           <select name="adult">
             <option value="">No Of Adult</option>
             <option value="1">1</option>
             <option value="2" >2</option>
              <option value="3">3</option>
         </select>
        Addition--}}
        <input type="hidden" name="price" value="">
        <input type="hidden" name="id" value=>
          <button value="1" id="room{" type="submit">Search</button>
         </form>


         {{-- <p id="price">{{$r->price}}</p> --}}
          {{-- @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
 @endif --}}
</div>

