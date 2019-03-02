@extends('layouts.forms')
@section('content') 
<form class="box" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
    <h1>Xpress Logistics Login</h1>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required autofocus autocomplete="off">
    @if ($errors->has('email'))
    <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <input type="password" name="password" id="password" placeholder="Password" required autocomplete="off">
    @if ($errors->has('password'))
    <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
@endif

    <input type="submit" name="" value="Login">
    <a class="" href="{{ route('password.request') }}">
            Forgot Your Password?
        </a>
        <br>
        <br>
        
          <a class="alink" href="{{ route('register') }}">
            If you do not have an account please register here.
        </a>
  </form>
@endsection
