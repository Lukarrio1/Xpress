@extends('layouts.forms')
@section('content')
<div class="valign-wrapper row login-box">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
    <form method="POST">
      <div class="card-content">
        <h3 class="card-title red-text center">Xpress 
          Logistics Register</h3>
          <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="firstname" type="text" class="validate" name="firstname">
          <label for="firstname">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="lastname" type="text" class="validate" name="lastname">
          <label for="last_name">Last Name</label>
        </div>
      </div>
            <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email">
          <label for="email" data-error="wrong" data-success="right">Email</label>
        </div>
      </div>

      <div class="row">
          <div class="input-field col s12">
            <input id="telephone" type="number" class="validate" name="phone">
          <label for="telephone">Telephone</label>
        </div>
      </div>
            <div class="row">
        <div class="input-field col s6">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
        <div class="input-field col s6">
            <input id="confirmpassword" type="password" class="validate">
          <label for="confirmpassword">Confirm Password </label>
        </div>
      </div>
      <div class="row">
                  <div class="input-field col s6">
          <input placeholder="City" id="city" type="text" class="validate" name="city">
          <label for="city">City</label>
                  </div>
                  {{--  <div class="input-field col s12 m6 ">  --}}
                        <label>Select Parish</label>
                <select class="browser-default col s6" name="parish">
                <option value="" disabled selected>Choose your Parish</option>
                <option value="Manchester">Manchester</option>
                <option value="Clarendon">Clarendon</option>
                <option value="St.Catherine">St.Catherine</option>
                <option value="St.Andrew">St.Andrew</option>
                <option value="Kingston">Kingston</option>
                <option value="St.Thomas">St.Thomas</option>
                <option value="Portland">Portland</option>
                <option value="St.Mary">St.Mary</option>
                <option value="St.Ann">St.Ann</option>
                <option value="Trelawny">Trelawny</option>
                <option value="St.James">St.James</option>
                <option value="Hanover">Hanover</option>
                <option value="Westmoreland">Westmoreland</option>
                <option value="St.Elizabeth">St.Elizabeth</option>
                </select>

             
  </div>
              </div>
      <div class="row">
        <div class="input-field col s12">
              <input placeholder="Country" id="country" type="text" class="validate" name="country">
          <label for="country">Country</label>
        </div>
      </div>
      <div class="row">
         <label>Preferred Pick Up Location</label> 
           <div class="input-field col s12">
    <select class="browser-default col 12" name="p_location">
      <option value="" disabled selected>Select Pick Up Location</option>
      <option value="1">Home Deivery</option>
      <option value="2">Office Pick Up</option>
     
    </select>
    
  </div>
        <p class="center">
      <label>
        <input for="termscheckbox" id="termscheckbox" type="checkbox"/>
        <span>Terms and conditions</span>
      </label>
    </p>
      </div>

      <div class="card-action center-align">
           <button type="submit" class="btn red waves-effect waves-light white-text center" >
             Submit
           </button>
      </div>
      <a class="alink" href="{{ route('login') }}">
      Already have an account? Login here.
  </a>          
         </form>
        </div>
      </div>




{{--  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  --}}
@endsection
