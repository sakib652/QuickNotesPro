@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h2 style="text-align: center; color: white">SignUp</h2>
    </div>
    <form method="POST" action="{{ route('register') }}" style="margin-top: 30px;">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="email">E-Mail Address</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
        </div>

        <div class="form-group">
            <label for="password-confirm">Confirm Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>

        <p class="mt-3">Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </form>
</div>
@endsection