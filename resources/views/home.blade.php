@extends('app')
@section('content')
<p>Welcome <b>{{ Auth::user()->name }}</b></p>
@endsection
