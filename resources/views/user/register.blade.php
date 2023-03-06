@extends('app')
@section('content')
<div class="container">
      <div class="wrapper">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <div class="title"><span>Register Form</span></div>
        <form method="POST" action="{{ route('register.action') }}">
            @csrf
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" type="username" name="username" value="{{ old('username') }}" required>
            </div>
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Name" type="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" type="password" name="password" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Confirm Password" type="password" name="password_confirm" required>
            </div>
            <div class="pass"><a href="#">Forgot password?</a></div>
            <div class="row button">
                <input type="submit" value="Login">
            </div>
          <div class="signup-link">Have an account? <a href="{{ route('login') }}">Sign In now</a></div>
        </form>
    </div>
</div>
@endsection