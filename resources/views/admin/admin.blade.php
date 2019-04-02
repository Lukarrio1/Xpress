@extends('layouts.admin')
@section('content')
{{--  <table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Telephone</th>
        <th scope="col">City</th>
        <th scope="col">Parish</th>
        <th scope="col">Country</th>
      </tr>
    </thead>
    <tbody id="users">
    </tbody>
  </table>  --}}
  
<body class="fixed-sn light-skin">
  
  <!-- Main Navigation -->
  <header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
      <ul class="custom-scrollbar">

        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
          <div class="text-center text-black-50">
            <a href="#" class="pl-0"><img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png"></a>
          </div>
        </li>

        <!-- Search Form -->
        <li>
          <form class="search-form" role="search">
            <div class="md-form mt-0 waves-light ">
              <input type="text" class="form-control py-2" placeholder="Search">
            </div>
          </form>
        </li>
        
        <!-- Side navigation links -->
        <li>
          <ul class="collapsible collapsible-accordion">
             <a href="" class="collapsible-header waves-effect"><i class="w-fa far fa-box"></i>Update Shipments</a>
            </li>
            <li>
              <a href="" class="collapsible-header waves-effect"><i class="w-fa fas fa-newspaper"></i>News Page</a>
            </li>
            <li>
              <a href="" class="collapsible-header waves-effect"><i class="w-fa fas fa-user"></i>All Users</a>
            </li>
            <li>
              <a href="" class="collapsible-header waves-effect"><i class="w-fa far fa-calendar-check"></i>Incoming Deliveries</a>
            </li>
            <li>
              <a href="" class="collapsible-header waves-effect"><i class="w-fa fas fa-file-invoice"></i>Invoices</a>
            </li>
            <a href="" class="collapsible-header waves-effect text-black"><i class="w-fa fas fa-envelope"></i>Messages</a>
            </li>

          </ul>
        </li>
        <!-- Side navigation links -->

      </ul>
      <div class="sidenav-bg mask-strong"></div>
    </div>
    <!-- Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
      </div>

      <!-- Breadcrumb -->
      <div class="breadcrumb-dn mr-auto">
        <p>Admin Dashboard</p>
      </div>

      <div class="d-flex change-mode">

        <div class="ml-auto mb-0 mr-3 change-mode-wrapper">
          <button class="btn btn-outline-black btn-sm" id="dark-mode">Change Mode</button>
        </div>  

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
            <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">My Account</a>
              <a class="dropdown-item" href="#">Log Out</a>
                  </div>
          </li>

        </ul>
        <!-- Navbar links -->

      </div>

    </nav>
    <!-- Navbar -->

  </header>
  <!-- Main Navigation -->

  <!-- Main layout -->
  <main>

    <div class="container-fluid">

      <!-- Section: Analytical panel -->
      <section class="mt-md-4 pt-md-2 mb-5">

        <!-- First row -->
        <div class="row">

          <!-- First column -->
          <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
  
              <!-- Card Data -->
              <div class="admin-up">
                <i class="far fa-money-bill-alt primary-color mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Sales</p>
                  <h4 class="font-weight-bold dark-grey-text">4 571 $</h4>
                </div>
              </div>
  
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text">Better than last week (25%)</p>
              </div>
  
            </div>
            <!-- Card -->

          </div>
          <!-- First column -->
  
          <!-- Second column -->
          <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
  
              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-chart-line warning-color mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Subscriptions</p>
                  <h4 class="font-weight-bold dark-grey-text">375</h4>
                </div>
              </div>
  
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar red accent-2" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text">Worse than last week (25%)</p>
              </div>
  
            </div>
            <!-- Card -->

          </div>
          <!-- Second column -->
  
          <!-- Third column -->
          <div class="col-xl-3 col-md-6 mb-md-0 mb-4">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
  
              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-chart-pie light-blue lighten-1 mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Traffic</p>
                  <h4 class="font-weight-bold dark-grey-text">21 479</h4>
                </div>
              </div>
  
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar red accent-2" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text">Worse than last week (75%)</p>
              </div>
  
            </div>
            <!-- Card -->

          </div>
          <!-- Third column -->
  
          <!-- Fourth column -->
          <div class="col-xl-3 col-md-6 mb-0">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
  
              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-chart-bar red accent-2 mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Organic traffic</p>
                  <h4 class="font-weight-bold dark-grey-text">4 567</h4>
                </div>
              </div>
  
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text">Better than last week (25%)</p>
              </div>
  
            </div>
            <!-- Card -->

          </div>
          <!-- Fourth column -->

        </div>
        <!-- First row -->

      </section>
      <!-- Section: Analytical panel -->

      <!-- Section: data tables -->
      <section class="pb-3">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-6 col-md-12">
  
            <!-- Panel -->
            <div class="card mb-4">

              <div class="card-header white-text primary-color">
                <h5 class="font-weight-500 my-1">Recent comments and replies</h5>
              </div>

              <div class="card-body">

                <table class="table">
                  <tbody>
                    <tr>
                      <td class="border-top-0">John Doe</td>
                      <td class="border-top-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</td>
                      <td class="border-top-0 hour">
                        <span class="grey-text float-right">
                          <i class="far fa-clock-o" aria-hidden="true"></i> 12 min
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>Merry Joe</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</td>
                      <td class="hour">
                        <span class="grey-text float-right">
                          <i class="far fa-clock-o" aria-hidden="true"></i> 12 min
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>Jessie Doe</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</td>
                      <td class="hour">
                        <span class="grey-text float-right">
                          <i class="far fa-clock-o" aria-hidden="true"></i> 12 min
                        </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
  
                <button class="btn btn btn-flat grey lighten-3 btn-rounded waves-effect font-weight-bold dark-grey-text float-right btn-dash">View full report</button>
  
              </div>

            </div>
            <!-- Panel -->
  
            <!-- Panel -->
            <div class="card mb-lg-0 mb-4">

              <div class="card-header white-text primary-color">
                <h5 class="font-weight-500 my-1">Issues</h5>
              </div>

              <div class="card-body">

                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="font-weight-bold dark-grey-text">Status</th>
                        <th class="font-weight-bold dark-grey-text">Title</th>
                        <th class="font-weight-bold dark-grey-text">User</th>
                        <th class="font-weight-bold dark-grey-text">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span class="badge green">Open</span></td>
                        <td>Lorem ipsum dolor</td>
                        <td>John Doe</td>
                        <td class="hour">
                          <span class="grey-text">
                            <i class="far fa-clock-o" aria-hidden="true"></i> 12 min
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td><span class="badge green">Open</span></td>
                        <td>Lorem ipsum dolor</td>
                        <td>John Doe</td>
                        <td class="hour">
                          <span class="grey-text">
                            <i class="far fa-clock-o" aria-hidden="true"></i> 12 min
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td><span class="badge warning-color">In progress</span></td>
                        <td>Lorem ipsum dolor</td>
                        <td>John Doe</td>
                        <td class="hour">
                          <span class="grey-text">
                            <i class="far fa-clock-o" aria-hidden="true"></i> 12 min
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td><span class="badge red">Closed</span></td>
                        <td>Lorem ipsum dolor</td>
                        <td>John Doe</td>
                        <td class="hour">
                          <span class="grey-text">
                            <i class="far fa-clock-o" aria-hidden="true"></i> 12 min
                          </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
  
              </div>

            </div>
            <!-- Panel -->
  
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-6 col-md-12">
  
            <!-- Panel -->
            <div class="card mb-4">

              <div class="card-header white-text primary-color">
                <h5 class="font-weight-500 my-1">Users activity</h5>
              </div>

              <div class="card-body">

                <div class="row my-2 pt-1">
                  <div class="col-4">
                    <small class="grey-text">Pages/Visits</small>
                    <h4>139 419</h4>
                  </div>
                  <div class="col-4">
                    <small class="grey-text">New visitors</small>
                    <h4>51.94%</h4>
                  </div>
                  <div class="col-4">
                    <small class="grey-text">Last week</small>
                    <h4>51 932</h4>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-4">
                    <small class="grey-text">Pages/Visits</small>
                    <h4>139 419</h4>
                  </div>
                  <div class="col-4">
                    <small class="grey-text">New visitors</small>
                    <h4>51.94%</h4>
                  </div>
                  <div class="col-4">
                    <small class="grey-text">Last week</small>
                    <h4>51 932</h4>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-4">
                    <small class="grey-text">Pages/Visits</small>
                    <h4>139 419</h4>
                  </div>
                  <div class="col-4">
                    <small class="grey-text">New visitors</small>
                    <h4>51.94%</h4>
                  </div>
                  <div class="col-4">
                    <small class="grey-text">Last week</small>
                    <h4>51 932</h4>
                  </div>
                </div>
  
                <button class="btn btn btn-flat grey lighten-3 btn-rounded waves-effect font-weight-bold dark-grey-text float-right btn-dash">View full report</button>

              </div>

            </div>
            <!-- Panel -->
  
            <!-- Panel -->
            <div class="card text-center mb-4 pt-4 pb-3 red accent-2 white-text">
              <i class="fas fa-bell fa-3x mb-3"></i>
              <h4 class="h4-responsive">28 important messages</h4>
            </div>
            <!-- Panel -->
  
            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-md-6 mb-md-0 mb-4">

                <!-- Panel -->
                <div class="card">
                  
                  <div class="card-header white-text grey darken-1">
                    <h5 class="font-weight-500 my-1">Orders</h5>
                  </div>

                  <h6 class="ml-4 mb-0 pt-4 dark-grey-text font-weight-bold"><i class="fas fa-arrow-up blue-text mr-3" aria-hidden="true"></i> 2000 </h6>

                  <div class="card-body">
                    <div class="progress">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="font-small grey-text mt-3 mb-0">Better than last week (25%)</p>
                  </div>

                </div>
                <!-- Panel -->

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-6 mb-0">

                <!-- Panel -->
                <div class="card">
                  <div class="card-header white-text warning-color">
                    <h5 class="font-weight-500 my-1">Monthly sales</h5>
                  </div>

                  <h6 class="ml-4 mb-0 pt-4 dark-grey-text font-weight-bold"><i class="fas fa-arrow-up blue-text mr-3" aria-hidden="true"></i> $ 2000</h6>

                  <div class="card-body">
                    <div class="progress">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="font-small grey-text mt-3 mb-0">Better than last week (25%)</p>
                  </div>

                </div>
                <!-- Panel -->

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->
  
          </div>
          <!-- Grid column -->
  
        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: data tables -->

    </div>

  </main>
  <!-- Main layout -->

  <!-- Footer -->
  <footer class="page-footer pt-0 mt-5 rgba-stylish-light">

    <!-- Copyright -->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
      </div>
    </div>

  </footer>

</div>
<!-- Card -->
@endsection
