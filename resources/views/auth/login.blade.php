@extends('layouts.forms')
@section('content')
<div class="valign-wrapper row login-box">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
    <form method="POST" action="{{ route('login') }}">
      {{ csrf_field() }}
      <div class="card-content">
        <h3 class="card-title center red-text">Xpress
          Logistics Login</h3>
        <div class="row">
          <div class="input-field col s12">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email">Email address</label>
              <input type="email" class="validate" name="email" id="email" value="{{ old('email') }}" required
                autofocus>
              @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
            </div>
            <div class="input-field col s12">
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password">Password </label>
                <input type="password" class="validate" name="password" id="password" placeholder="Password" required />
                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

              </div>
            </div>
          </div>
          <div class="center">
            <button type="reset" id="reset" class="btn green waves-effect">Reset</button>
            <button class="btn red waves-effect waves-light" type="submit">Login</button>
          </div>
        </div>
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
  <br>
  <br>
  </div>
</div>
{{--  <form class="box" method="POST" action="{{ route('login') }}">
{{ csrf_field() }}
<h1>Xpress Logistics Login</h1>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
  <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required autofocus
    autocomplete="off">
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

    <a href="{{ route('register') }}">
      If you do not have an account please register here.
    </a>
    </form> --}}
    @endsection