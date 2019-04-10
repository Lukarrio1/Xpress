<header>

        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed text-dark">
          <ul class="custom-scrollbar">
    
            <!-- Logo -->
            <li class="logo-sn waves-effect py-3">
              <div class="text-center text-black-50">
              <a href="#" class="pl-0"><img src="{{url('storage/xpresslogo.png')}}" style="height:100px;"></a>
              </div>
            </li>
    
            {{-- <!-- Search Form -->
            <li>
              <form class="search-form" role="search">
                <div class="md-form mt-0 waves-light ">
                  <input type="text" class="form-control py-2" placeholder="Search">
                </div>
              </form>
            </li>
             --}}
            <!-- Side navigation links -->
            <li>
              <ul class="collapsible collapsible-accordion">
              <a href="{{route('admin.shipments')}}" class="collapsible-header waves-effect text-dark"><i class="w-fa fas fa-box-open"></i>Update Shipments</a>
                </li>
                <li>
                <a href="{{route('admin.news')}}" class="collapsible-header waves-effect text-dark"><i class="w-fa fas fa-newspaper"></i>News Page</a>
                </li>
                <li>
                <a href="{{route('admin.allusers')}}" class="collapsible-header waves-effect text-dark"><i class="w-fa fas fa-user"></i>All Users</a>
                </li>
                <li>
                <a href="{{route('admin.delivery')}}" class="collapsible-header waves-effect text-dark"><i class="w-fa far fa-calendar-check"></i>Incoming Deliveries</a>
                </li>
                <li>
                <a href="{{route('admin.invoice')}}" class="collapsible-header waves-effect text-dark"><i class="w-fa fas fa-file-invoice"></i>Invoices</a>
                </li>
              <a href="{{route('admin.message')}}" class="collapsible-header waves-effect text-dark"><i class="w-fa fas fa-envelope"></i>Messages</a>
                </li>
    
              </ul>
            </li>
            <!-- Side navigation links -->
    
          </ul>
          <div class="sidenav-bg mask-strong"></div>
        </div>
        <!-- Sidebar navigation -->
    
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav bg-white">
    
          <!-- SideNav slide-out button -->
          <div class="float-left ">
            <a href="#" data-activates="slide-out" class="button-collapse text-dark"><i class="fas fa-bars"></i></a>
          </div>
    
          <!-- Breadcrumb -->
          <div class="breadcrumb-dn mr-auto">
            <p>Admin Dashboard</p>
          </div>
    
          <div class="d-flex change-mode">
    
            {{-- <div class="ml-auto mb-0 mr-3 change-mode-wrapper">
              <button class="btn btn-outline-black btn-sm" id="dark-mode">Change Mode</button>
            </div>   --}}
    
            <!-- Navbar links -->
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
    
              <!-- Dropdown -->
              <li class="nav-item dropdown notifications-nav">
                <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="badge red">3</span> <i class="fas fa-bell"></i>
                  <span class="d-none d-md-inline-block">Notifications</span>
                </a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">
                    <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                    <span>New order received</span>
                    <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 13 min</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                    <span>New order received</span>
                    <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 33 min</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-chart-line mr-2" aria-hidden="true"></i>
                    <span>Your campaign is about to end</span>
                    <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 53 min</span>
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect text-dark" href="#" id="userDropdown" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">My Account</a>
                <a class="dropdown-item" href="{{route('admin.logout')}}">Log Out</a>
                      </div>
              </li>
    
            </ul>
            <!-- Navbar links -->
    
          </div>
    
        </nav>
        <!-- Navbar -->
    
      </header>