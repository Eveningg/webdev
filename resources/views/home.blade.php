@extends('app')
@section('content')

<style>
.btn {
    min-width: 250px;
}
.margin {
    margin-top: 10px;
}
</style>


@auth
<div class="text-center">
    <p style="font-size:40px;">  <strong> Welcome <b>{{ Auth::user()->name }}</b> </strong></p>

    <div class="btn-group-vertical">
        <a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>

        <div class="margin">
            <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
        </div>

    </div>
</div>
@endauth
@guest
<div class="text-center">
    <h1> <strong>Home Page</strong></h1>
    <div class="btn-group-vertical">
        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
        <div class="margin">
            <a class="btn btn-info" href="{{ route('register') }}">Register</a>
        </div>
    </div>
</div>
@endguest
@endsection
