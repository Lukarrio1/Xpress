@extends('layouts.forms')

@section('content')

<div class="main-content">
        <div class="header bg-gradient-danger py-7 py-lg-8 pt-lg-9">
       
           <div class="separator separator-bottom separator-skew zindex-100">
               <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                   <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
               </svg>
           </div>
       </div>    
           <div class="container mt--8 pb-5">
               <div class="row justify-content-center">
                   <div class="col-lg-5 col-md-7">
                       <div class="card bg-secondary shadow border-0">
                           <div class="card-header bg-transparent pb-5 text-center text-muted h1">
                                ADMIN Reset Password
                           </div>
                           <div class="card-body px-lg-5 py-lg-5">
                               @include('inc.message')
                                @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                           <form role="form" method="POST" action="{{route('admin.password.request')}}">
                                <input type="hidden" name="token" value="{{ $token }}">
                              {{ csrf_field() }}
                                   <div class="form-group mb-3">
                                       <div class="input-group input-group-alternative">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text"><i class="fa fa-envelope-square"></i></span>
                                           </div>
                                           <input class="form-control" placeholder="Email" type="email" name="email" value="{{$email or old('email') }}" required autofocus>
                                           @if ($errors->has('email'))
                                           <span class="text-danger pt-1">
                                             <strong>{{ $errors->first('email') }}</strong>
                                           </span>
                                           @endif
                                       </div>
                                  </div>
                                   <div class="form-group">
                                       <div class="input-group input-group-alternative">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text"><i class="fa fa-unlock"></i></span>
                                           </div>
                                           <input class="form-control" name="password" placeholder="Password" type="password" required>
                                           @if ($errors->has('password'))
                                           <span class="text-danger pt-1">
                                             <strong>{{ $errors->first('password') }}</strong>
                                           </span>
                                           @endif
                                       </div>
                                  </div>
                                   <div class="form-group">
                                       <div class="input-group input-group-alternative">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text"><i class="fa fa-unlock"></i></span>
                                           </div>
                                           <input class="form-control" name="password_confirmation" placeholder="Password confirm" type="password" required>
                                           @if ($errors->has('password_confirmation'))
                                           <span class="help-block">
                                               <strong>{{ $errors->first('password_confirmation') }}</strong>
                                           </span>
                                       @endif
                                       </div>
                                  </div>
                                   <div class="text-center">
                                       <button type="submit" class="btn btn-primary my-4" value="Login">Reset Password</button>
                                   </div>
                               </form>
                           </div>
                       </div>
                       <div class="row mt-3">
                           <div class="col-6">
                           <a href="{{route('admin.login')}}" class="text-white">
                                       <small>Login</small>
                                   </a>
                                                
                       </div>
                   </div>
               </div>
           </div>
               </div> 
{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

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

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
