@extends('app')
@section('content')
<div class="container">
      <div class="wrapper">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <div class="title"><span>Login Form</span></div>
        <form method="POST" action="{{ route('login.action') }}">
            @csrf
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" type="username" name="username" value="{{ old('username') }}" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" type="password" name="password" required>
            </div>
            <div class="pass"><a href="#">Forgot password?</a></div>
            <div class="row button">
                <input type="submit" value="Login">
            </div>
          <div class="signup-link">Not a account? <a href="{{ route('register') }}">Signup now</a></div>
        </form>
    </div>
</div>
@endsection

<!-- <a class="btn btn-danger" href="{{ route('home') }}">Back</a> -->
