@extends('layouts.forms')
@section('content')
<div class="main-content">
    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
<div class="container">
<a class="navbar-brand" href="login.html">
    <img src="argon/img/brand/white.png" />
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
    <!-- Collapse header -->
    <div class="navbar-collapse-header">
        <div class="row">
            <div class="col-6 collapse-brand">
                <a href="login.html">
                    <img src="argon/img/brand/blue.png">
                </a>
            </div>
            <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
    <!-- Navbar items -->
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="login.html">
                <span class="nav-link-inner--text">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="pricing.html" class="nav-link">
                <span class="nav-link-inner--text">Pricing</span>
            </a>
        </li>
                            <li class="nav-item">
                <a class="nav-link" href="login.html">
                    <span class="nav-link-inner--text">Login</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.html">
                    <span class="nav-link-inner--text">Register</span>
                </a>
            </li>
                        <li class="nav-item">
            <a href="lock.html" class="nav-link">
                <span class="nav-link-inner--text">Lock</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.html">
                <span class="nav-link-inner--text">Profile</span>
            </a>
        </li>
    </ul>
    <hr class="d-lg-none" />
    <ul class="navbar-nav align-items-lg-center ml-lg-auto">
        <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank" data-toggle="tooltip" title="" data-original-title="Like us on Facebook">
                <i class="fab fa-facebook-square"></i>
                <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Instagram">
                <i class="fab fa-instagram"></i>
                <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Twitter">
                <i class="fab fa-twitter-square"></i>
                <span class="nav-link-inner--text d-lg-none">Twitter</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="" data-original-title="Star us on Github">
                <i class="fab fa-github"></i>
                <span class="nav-link-inner--text d-lg-none">Github</span>
            </a>
        </li>
    </ul>
</div>
</div>
</nav>                <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
<div class="container">
<div class="header-body text-center mb-7">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6">
            <h1 class="text-white">Welcome!</h1>
            <p class="text-lead text-light">
                Use these awesome forms to login or create new account in your project for free.
                                    </p>
        </div>
    </div>
</div>
</div>
<div class="separator separator-bottom separator-skew zindex-100">
<svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
</svg>
</div>
</div>    
<div class="container mt--8 pb-5">
<!-- Table -->
<div class="row justify-content-center">
    <div class="col-lg-6 col-md-8">
        <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5">
                <div class="text-muted text-center mt-2 mb-4"><small>Sign up with</small></div>
                <div class="text-center">
                    <a href="#" class="btn btn-neutral btn-icon mr-4">
                        <span class="btn-inner--icon"><img src="argon/img/icons/common/github.svg"></span>
                        <span class="btn-inner--text">Github</span>
                    </a>
                    <a href="#" class="btn btn-neutral btn-icon">
                        <span class="btn-inner--icon"><img src="argon/img/icons/common/google.svg"></span>
                        <span class="btn-inner--text">Google</span>
                    </a>
                </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                    <small>Or sign up with credentials</small>
                </div>
                <form role="form" method="POST" action="http://argon-dashboard-pro-laravel.creative-tim.com/register">
                    <input type="hidden" name="_token" value="R0Mu0UI7yB3wp4o5wyhupwoAuLvN59h8g91jLqT2">
                    <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                            </div>
                            <input class="form-control" placeholder="Name" type="text" name="name" value="" required autofocus>
                        </div>
                                                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input class="form-control" placeholder="Email" type="email" name="email" value="" required>
                        </div>
                                                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input class="form-control" placeholder="Password" type="password" name="password" required>
                        </div>
                                                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation" required>
                        </div>
                    </div>
                    <div class="text-muted font-italic">
                        <small>password strength: <span class="text-success font-weight-700">strong</span></small>
                    </div>
                    <div class="row my-4">
                        <div class="col-12">
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                                <label class="custom-control-label" for="customCheckRegister">
                                    <span class="text-muted">I agree with the <a href="#!">Privacy Policy</a></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-4">Create account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection