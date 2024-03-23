@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-4;">
        <h2 style="text-align: center; color: white; margin-top: 120px;">Login</h2>
    </div>
    <form method="POST" action="{{ route('login') }}" style="margin-top: 30px;">
        @csrf

        <div class="form-group">
            <label for="email">E-Mail Address</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
        </div>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember me</label>
        </div>

        <p class="mt-2"><a href="{{ route('password.request') }}">Forgot Your Password?</a></p>

        <button type="submit" class="btn btn-primary">Login</button><br><br>
        <p class="mt-3;" style="text-align: center;">Don't have an account? <a href="{{ route('register') }}">Create one</a></p>
    </form>
</div>
@endsection