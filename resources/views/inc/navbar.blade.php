 {{-- <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a 
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>  --}}
 <!--Main Navigation-->
  <header>

    <!-- Sidebar navigation -->
    <div id="slide-out" data-activates="slide-out" class="side-nav sn-bg-4 fixed">
      <ul class="custom-scrollbar">
        <!-- Logo -->
        <li class="logo-sn waves-effect">
          <div class="text-center">
            <a href="#" class="pl-0"><img src="" class=""></a>
          </div>
        </li>
        <!--/. Logo -->

        <!--Search Form-->
        {{-- <li>
          <form class="search-form" role="search">
            <div class="form-group md-form mt-0 pt-1 waves-light">
              <input type="text" class="form-control" placeholder="Search">
            </div>
          </form>
        </li> --}}
        <!--/.Search Form-->
        <!-- Side navigation links -->
        <li>
          
          <ul class="collapsible collapsible-accordion">
            <!-- Simple link -->
            <li><a href="" class="collapsible-header waves-effect">
              <i class="fas fa-tachometer-alt"></i>
                Dashboard</a></li>

                <li><a href="" class="collapsible-header waves-effect">
                     <i class="fas fa-box-open"></i>
                My Shipments</a></li>

                <li><a href="" class="collapsible-header waves-effect">
                    <i class="fas fa-bell"></i>
                Pre Alert</a></li>



            
  </header>
