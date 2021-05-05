<form action="{{route('supplier.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Fullname">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="address" placeholder="Address">
    <input type="phone" name="phone" placeholder="Phone">
    <input type="password" name="password" placeholder="password">
    <button type="submit">Request Now</button>
<a href="{{route('supplier.login')}}">Login</a>
</form>
