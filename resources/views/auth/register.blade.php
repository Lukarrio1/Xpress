@extends('layouts.app')
@section('content')

<div class="valign-wrapper row login-box">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
    <form method="POST">
      <div class="card-content">
        <h3 class="card-title  red-text">Xpress 
          Logistics Register</h3>
          <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="firstname" type="text" class="validate">
          <label for="firstname">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="lastname" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
            <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" >
          <label for="email" data-error="wrong" data-success="right">Email</label>
        </div>
      </div>

      <div class="row">
          <div class="input-field col s12">
            <input id="telephone" type="number" class="validate">
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
          <input placeholder="City" id="city" type="text" class="validate">
          <label for="city">City</label>
                  </div>
                  {{--  <div class="input-field col s12 m6 ">  --}}
                        <label>Select Parish</label>
                <select class="browser-default col s6">
                <option value="" disabled selected>Choose your Parish</option>
                <option value="1">Manchester</option>
                <option value="2">Clarendon</option>
                <option value="3">St.Catherine</option>
                <option value="4">St.Andrew</option>
                <option value="5">Kingston</option>
                <option value="6">St.Thomas</option>
                <option value="7">Portland</option>
                <option value="8">St.Mary</option>
                <option value="9">St.Ann</option>
                <option value="10">Trelawny</option>
                <option value="11">St.James</option>
                <option value="12">Hanover</option>
                <option value="13">Westmoreland</option>
                <option value="14">St.Elizabeth</option>
                </select>

             
  </div>
              </div>
      <div class="row">
        <div class="input-field col s12">
              <input placeholder="Country" id="country" type="text" class="validate">
          <label for="country">Country</label>
        </div>
      </div>
      <div class="row">
         <label>Preferred Pick Up Location</label> 
           <div class="input-field col s12">
            
    <select class="browser-default col 12">
      <option value="" disabled selected>Select Pick Up Location</option>
      <option value="1">Home Deivery</option>
      <option value="2">Office Pick Up</option>
     
    </select>
    
  </div>
        <p>
      <label>
        <input for="termscheckbox" id="termscheckbox" type="checkbox" checked="checked" disabled="disabled" />
        <span></span>
      </label>
    </p>
        </form>
      </div>

          <div class="card-action center-align">
           <input type="submit" class="btn red waves-effect waves-light white-text center" value="Submit">
      </div>
      <a class="alink" href="{{ route('register') }}">
      Already have an account? Login here.
  </a>          
         </form>
        </div>
      </div>
</div>
        
      </div>
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
