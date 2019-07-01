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
          <a href="/" class="pl-0"><img src="{{url('storage/xpress.png')}}" style="height:100px;"></a>
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
            <li><a href="{{ route('home') }}" class="collapsible-header waves-effect">
              <i class="fas fa-tachometer-alt"></i>
                Dashboard</a></li>

            <li><a href="{{route('shipments.home')}}" class="collapsible-header waves-effect" id="spall">
                     <i class="fas fa-box-open"></i>
                My Shipments</a></li>

            <li><a href="{{route('Pre.Alerts.home')}}" class="collapsible-header waves-effect">
                    <i class="fas fa-bell"></i>
                Pre Alert</a></li>

            <li><a href="{{route('shippingCalculator.home')}}" class="collapsible-header waves-effect">
                    <i class="fas fa-calculator"></i>
                Shipping Calculator</a></li>

            <li><a href="{{route('scheduledelivery.home')}}" class="collapsible-header waves-effect">
                    <i class="fas fa-truck"></i>
                Schedule Delivery</a></li>



{{--  


            <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-tachometer-alt"></i>
                Dashboards<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="v-1.html" class="waves-effect">Version 1</a>
                  </li>
                  <li><a href="v-2.html" class="waves-effect">Version 2</a>
                  </li>
                  <li><a href="v-3.html" class="waves-effect">Version 3</a>
                  </li>
                  <li><a href="v-4.html" class="waves-effect">Version 4</a>
                  </li>
                  <li><a href="v-5.html" class="waves-effect">Version 5</a>
                  </li>
                  <li><a href="v-6.html" class="waves-effect">Version 6</a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-image"></i> Pages<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                {{-- <ul>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/login.html" class="waves-effect">Login</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/register.html" class="waves-effect">Register</a>
                  </li>{{  }}
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/pricing.html" class="waves-effect">Pricing</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/about.html" class="waves-effect">About us</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/single.html" class="waves-effect">Single post</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/post.html" class="waves-effect">Post listing</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/landing.html" class="waves-effect">Landing page</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/customers.html" class="waves-effect">Customers</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/invoice.html" class="waves-effect">Invoice</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/page-creator.html" class="waves-effect">Page Creator</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/support.html" class="waves-effect">Support</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/chat.html" class="waves-effect">Chat</a>
                  </li>
                </ul> --}}
              {{--  </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-user"></i> Profile<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">  --}}
                {{-- <ul>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/profile/basic-1.html" class="waves-effect">Basic 1</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/profile/basic-2.html" class="waves-effect">Basic 2</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/profile/extended.html" class="waves-effect">Extended</a>
                  </li>
                </ul> --}}
              {{--  </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fab fa-css3"></i> CSS<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">  --}}
                {{-- <ul>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/grid.html" class="waves-effect">Grid system</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/media.html" class="waves-effect">Media object</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/utilities.html" class="waves-effect">Utilities / helpers</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/code.html" class="waves-effect">Code</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/icons.html" class="waves-effect">Icons</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/images.html" class="waves-effect">Images</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/typography.html" class="waves-effect">Typography</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/animations.html" class="waves-effect">Animations</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/colors.html" class="waves-effect">Colors</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/hover.html" class="waves-effect">Hover effects</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/masks.html" class="waves-effect">Masks</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/shadows.html" class="waves-effect">Shadows</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/skins.html" class="waves-effect">Skins</a>
                  </li>
                </ul> --}}
              {{--  </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-th"></i> Components<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">  --}}
                {{-- <ul>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/buttons.html" class="waves-effect">Buttons</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/cards.html" class="waves-effect">Cards</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/collapse.html" class="waves-effect">Collapse</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/date.html" class="waves-effect">Date picker</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/list.html" class="waves-effect">List group</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/panels.html" class="waves-effect">Panels</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/pagination.html" class="waves-effect">Pagination</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/popovers.html" class="waves-effect">Popovers</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/progress.html" class="waves-effect">Progress bars</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/stepper.html" class="waves-effect">Stepper</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/tabs.html" class="waves-effect">Tabs & pills</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/tags.html" class="waves-effect">Tags, labels & badges</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/time.html" class="waves-effect">Time picker</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/tooltips.html" class="waves-effect">Tooltips</a>
                  </li>
                </ul> --}}
              {{--  </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-check-square"></i> Forms<i
                  class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">  --}}
                {{-- <ul>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/forms/basic.html" class="waves-effect">Basic</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/forms/extended.html" class="waves-effect">Extended</a>
                  </li>
                </ul> --}}
              {{--  </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-table"></i> Tables<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">  --}}
                {{-- <ul>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/tables/basic.html" class="waves-effect">Basic</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/tables/extended.html" class="waves-effect">Extended</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/tables/datatables.html" class="waves-effect">DataTables.net</a>
                  </li>
                </ul> --}}
              {{--  </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-map"></i> Maps<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                {{-- <ul>  --}}
                  {{--  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/maps/google.html" class="waves-effect">Google Maps</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/maps/full.html" class="waves-effect">Full screen map</a>
                  </li>
                  <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/maps/vector.html" class="waves-effect">Vector world map</a>
                  </li>
                </ul> --}}
              {{--  </div>
            </li>
            <!-- Simple link -->
            <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/alerts/alerts.html" class="collapsible-header waves-effect"><i class=" far fa-bell"></i>
                Alerts</a></li>

            <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/modals/modals.html" class="collapsible-header waves-effect"><i class=" fas fa-bolt"></i>
                Modals</a></li>

            <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/charts/charts.html" class="collapsible-header waves-effect"><i class=" fas fa-chart-pie"></i>
                Charts</a></li>

            <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/calendar/calendar.html" class="collapsible-header waves-effect"><i class=" far fa-calendar-check"></i>
                Calendar</a></li>

            <li><a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/sections/sections.html" class="collapsible-header waves-effect"><i class=" fas fa-th-large"></i>
                Sections</a></li>

          </ul>
        </li>  --}}  
        <!--/. Side navigation links -->
      </ul>
      <div class="sidenav-bg mask-strong"></div>
    </div>  
    <!--/. Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fas fa-bars"></i></a>
      </div>
      <!-- Breadcrumb-->
      <div class="breadcrumb-dn mr-auto">
        <p>Xpress Logisticsja</p>
      </div>

      <!--Navbar links-->
      <ul class="nav navbar-nav nav-flex-icons ml-auto">

        <!-- Dropdown -->
        <li class="nav-item dropdown notifications-nav">
          <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="badge red"><span id="notificount">0</span></span> <i class="fas fa-bell"></i>
            <span class="d-none d-md-inline-block">Notifications</span>
          </a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink" id="notificationcenter">
            <span id="emailnotify"></span>
            <span id="spnotify"></span>
            <span id="spready"></span>
            {{-- <span id="allusersnotify"></span> --}}
          </div>
        </li>
        <li class="nav-item">
        <a class="nav-link waves-effect" href="{{route('user.messages')}}"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
        </li>
        {{--  <li class="nav-item">
          <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
        </li>  --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block"> <span id="authusername"></span> </span></a>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="{{route('account.edit')}}">My Account</a>
            <a class="dropdown-item" href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Log Out 
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form> 
            </div>
        </li>

      </ul>
      <!--/Navbar links-->
    </nav>
    <!-- /.Navbar -->

    <!-- Fixed button -->
    <div class="fixed-action-btn clearfix d-none d-xl-block" style="bottom: 45px; right: 24px;">
      <a class="btn-floating btn-lg bg-danger">
        <i class="fas fa-pencil-alt"></i>
      </a>

      <ul class="list-unstyled">
        <li><a class="btn-floating red"><i class="fas fa-calculator"></i></a></li>
        <li><a class="btn-floating yellow darken-1"><i class="fas fa-user"></i></a></li>
        <li><a class="btn-floating green"><i class="fas fa-envelope"></i></a></li>
        <li><a class="btn-floating blue"><i class="fas fa-ship"></i></a></li>
      </ul>
    </div>
    <!-- Fixed button -->

  </header>
