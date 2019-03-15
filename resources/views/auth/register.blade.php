@extends('layouts.forms')
@section('content')

<div class="main-content">
  <div class="header bg-gradient-danger py-9 py-lg-12 pt-lg-12">
 
     <div class="separator separator-bottom separator-skew zindex-100">
         <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
             <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
         </svg>
     </div>
 </div>    
     <div class="container mt--8 pb-5">
         <div class="row justify-content-center">
             <div class="col-lg-5 col-md-7">
                 <div class="card hoverable bg-secondary shadow border-0 pb-5">
                     <div class="card-header bg-transparent pb-5 text-center text-muted h1">
                     Xpress Logistics Register
                     </div>
                     @include('inc.alert')
                     <div class="card-body px-lg-5 py-lg-5">
                            <form role="form" method="POST" action="{{route('register')}}">
                                    {{ csrf_field() }}
                       <div class="form-group">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                       
                                    </div>
                                    <input class="form-control" placeholder="Name" type="text" name="name" value="" required autofocus>
                                </div>
                                  </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        
                                    </div>
                                    <input class="form-control" placeholder="Email" type="email" name="email" value="" required>
                                </div>
                                                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        
                                    </div>
                                    <input class="form-control" placeholder="Password" type="password" name="password" required>
                                </div>
                                                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                       
                                    </div>
                                    <input class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation" required>
                                </div>
                            </div>
                              <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                              </div>
                                    <input class="form-control" placeholder="Telephone" type="text" name="telephone" required>
                                </div>
                                      </div>
                                      <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                              </div>
                                    <input class="form-control" placeholder="City" type="text" name="city" required>
                                </div>
                                      </div>
                                      <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                              </div>
                                    <input class="form-control" placeholder="Parish/State" type="text" name="parish" required>
                                </div>
                                      </div>
                                      <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                              </div>
                                    <input class="form-control" placeholder="Country" type="text" name="country" required>
                                </div>
                                      </div>


                            <div class="row my-4">
                                <div class="col-12">
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id="customCheckRegister" type="checkbox" name="terms">
                                        <label class="custom-control-label" for="customCheckRegister">
                                            <span class="text-muted">I agree with the <a href="#">Privacy Policy</a></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">Create account</button>
                            </div>
                        </form>
                            <br>
                                   <span class="text-muted">Already have an account?<a href="{{route('login')}}">Login Here</a></span>
                     </div>
                    
                 </div>
             </div>
             </div>
             </div>
                                        
                     
 
                    
                            



@endsection
