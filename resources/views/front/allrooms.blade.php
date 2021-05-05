<style>
    body {
    background-color: #eee
}

.product {
    padding: 10px;
    background-color: #fff;
    position: relative
}

.about h4 {
    margin-bottom: -3px
}

.about h3 {
    color: #e3ce57
}

.about span {
    font-size: 13px
}

.dot {
    height: 40px;
    width: 40px;
    background-color: #e3ce57;
    border-radius: 50%;
    display: inline-block;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    cursor: pointer;
    right: 10%;
    z-index: 10;
    bottom: -5%
}

.inner-dot {
    height: 30px;
    width: 30px;
    background-color: #fff;
    border-radius: 50%;
    display: inline-block;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    cursor: pointer
}
    </style>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="container mt-5">
    <h1>Search room</h1>

    <div class="row d-flex justify-content-center g-1">
        @foreach ($room as $r )
              <div class="col-md-4">
              <div class="product text-center"> <img src="{{asset($r->image)}}" width="250">
                <div class="about text-left px-3">
                <h4>{{$r->roomname}}</h4> <span class="text-muted"><h5>Capacity: {{$r->children +$r->adult}}</h5></span>
                <h3>Rs{{$r->price}}</h3>
                </div><a href="">BookNow</a></span></span>
            </div>
        </div>
        @endforeach

    </div>
</div>
