{{----}}
@if(Auth::check())
    <h1>PERFECT</h1>
    @if(isset($user))
        {{ 'Name : ' . $user->name }} <br/>
        {{ 'Email : ' . $user->email }} <br/>
        {{ 'Password : ' . $user->password }}  <br/>

        <a href="{{url('logout')}}">Logout</a>
    @endif
@else 
    <p>You need login to page!</p>
    <p>Go to login : <a href="{{url('login')}}">Login</a></p>
@endif

