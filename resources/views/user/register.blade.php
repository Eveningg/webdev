@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('register.action') }}">
            @csrf

            <div class="mb-3">
                <label>Name <span class="text-danger">*</span></label>
                <input class="form-control" name="name" value="{{ old('name') }}" />
            </div>

            <div class="mb-3">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" name="username" value="{{ old('username') }}" />
            </div>

            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" name="password" />
            </div>

            <div class="mb-3">
                <label>Password Confirmation<span class="text-danger">*</span></label>
                <input class="form-control" name="password confirmation" />
            </div>

            <div class="mb-3">
                <label>Password Confirmation<span class="text-danger">*</span></label>
                <input class="form-control" name="password confirmation" />
            </div>

            <div class="mb-3">
                <button class="btn btn-primary">Register</button>
                <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection