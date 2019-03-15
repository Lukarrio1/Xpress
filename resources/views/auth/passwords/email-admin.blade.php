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
                                Admin Reset Password
                           </div>
                           <div class="card-body px-lg-5 py-lg-5">
                                @if (session('status'))
                                <div class="alert text-center alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                           <form role="form" method="POST" action="{{ route('admin.password.email')}}">
                              {{ csrf_field() }}
                                   <div class="form-group mb-3">
                                       <div class="input-group input-group-alternative">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text"><i class="fa fa-envelope-square"></i></span>
                                           </div>
                                           <input class="form-control" placeholder="Email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                                           @if ($errors->has('email'))
                                           <span class="text-danger pt-1">
                                             <strong>{{ $errors->first('email') }}</strong>
                                           </span>
                                           @endif
                                       </div>
                                  </div>
                                   <div class="text-center">
                                       <button type="submit" class="btn btn-primary my-4" value="Login">Send Password Reset Link</button>
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
               </div> 
@endsection
