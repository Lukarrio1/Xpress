<header>

        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed text-dark">
          <ul class="custom-scrollbar">
    
            <!-- Logo -->
            <li class="logo-sn waves-effect py-3">
              <div class="text-center text-black-50">
              <a href="/admin" class="pl-0"><img src="{{url('storage/xpress.png')}}" style="height:100px;"></a>
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
            <a href="{{route('admin.dashboard')}}" class="collapsible-header waves-effect text-dark"><i class="w-fa fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
            
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-box-open"></i>Update Shipments<i
                  class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul class="list-unstyled">
                  
                <li><a href="{{ route('admin.shipments') }}" class="waves-effect">Add Shipments</a>
                  </li>
                  <li><a href="{{ route('admin.sent.shipments') }}" class="waves-effect">View all Shipments</a>
                  </li>
                </ul>
              </div>
            </li>
            
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
                <li>
                <a href="{{route('admin.calculator')}}" class="collapsible-header waves-effect text-dark"><i class="fas fa-calculator"></i>Shipment Calculator</a>
                </li>
                {{-- <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-envelope"></i>Messages<i
                  class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul class="list-unstyled">
                  <li><a href="{{ route('admin.message') }}" class="waves-effect">Inbox</a>
                  </li>
                  <li><a href="#" class="waves-effect">Compose Message</a>
                  </li> --}}
                </ul>
              </div>
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
                  <span class="badge red" id="invoicentc"></span> <i class="fas fa-bell"></i>
                  <span class="d-none d-md-inline-block">Notifications</span>
                </a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <span id="invoicent"></span>
                <span id="deliverynt"></span>
                </div>
              </li>
              <li class="nav-item">
                {{-- <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
              </li> --}}
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect text-dark" href="#" id="userDropdown" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block"> <span class="text-dark" id="adminMainname"></span> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{route('admin.edit')}}">My Account</a>
                <a class="dropdown-item" href="{{route('admin.logout')}}">Log Out</a>
                      </div>
              </li>
    
            </ul>
            <!-- Navbar links -->
    
          </div>
    
        </nav>
        <!-- Navbar -->
    
      </header>