@extends('layouts.forms')
@section('content')
<div class="valign-wrapper row login-box">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
    <form method="POST">
      <div class="card-content">
        <h3 class="card-title  red-text">Xpress 
          Logistics Login</h3>
        <div class="row">
          <div class="input-field col s12">
            <label for="email">Email address</label>
            <input type="email" class="validate" name="email" id="email" />
          </div>
          <div class="input-field col s12">
            <label for="password">Password </label>
            <input type="password" class="validate" name="password" id="password" />
          </div>
        </div>
      </div>
        
      <div class="card-action center-align">
        <input type="reset" id="reset" class="btn green white-text waves-effect center">
        <input type="submit" class="btn red waves-effect waves-light white-text center" value="Login">
      </div>
    </form>
    <a class="" href="{{ route('password.request') }}">
      Forgot Your Password?
  </a>
  <br>
  <br>
  
    <a class="alink" href="{{ route('register') }}">
      Need an account? Register here.
  </a>
  </div>
</div>
{{--  <form class="box" method="POST" action="{{ route('login') }}">
=======
@section('content') 
<form class="box" method="POST" action="{{ route('login') }}">
>>>>>>> 3aca45a73586d9d8085ff36bfe62ec535a527ed1
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
  </form>  --}}
@endsection
