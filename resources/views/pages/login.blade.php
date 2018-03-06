{{ $error or '' }}
<form action="{{route('loginSystem')}}" method="post">
    {{ csrf_field() }}
    <input type="text" name="email" placeholder="email" value="{{$email or ''}}"/>
    <input type="text" name="password" placeholder="password"/>
    <input type="submit" value="Login">
</form>