@extends('layouts.app')

@section('content')
{{--  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">User Dashboard</div>
                <div class="panel-body">
                  <p class="lead">{{auth()->user()->verified() ? ' ' : 'Your account is not verified check your email to verify..'}} </p>
                </div>
            </div>
        </div>
    </div>
</div>  --}}

                  <!--/Pagination -->

      <!--Section: Main panel-->

  <!-- Central Modal Large Info -->
  
<button type="button" class="btn btn-primary waves-effect waves-light " data-toggle="modal" data-target="#centralModalLGInfoDemo" id="modal" style="display:none;">
              </button>
        <div class="modal fade" id="centralModalLGInfoDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg modal-notify modal-info" role="document">
            <!-- Content -->
            <div class="modal-content">
              <!-- Header -->
              <div class="modal-header">
              <p class="heading lead">Welcome {{Auth::user()->name}}</p>
              </div>

              <!-- Body -->
              <div class="modal-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
      aria-selected="true">Overseas Address</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
      aria-selected="false">Pre Alert</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
      aria-selected="false">Notifications</a>
  </li>
  
</ul>
<!-- Overseas address modal content -->
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active text-center" id="home" role="tabpanel" aria-labelledby="home-tab">
    <i class="fas fa-globe-americas fa-5x blue-text"></i><br>
    <h2>Overseas Address</h2><br>
    Name : Timothy Russell<br>
    Address line 1: 2736 NW 29th Terrace,<br>
    Address line 2: Bldg 13 Lauderdale Lakes,<br>
    City / State : Oakland, Florida<br>
    Zipcode : 33311    
  </div>
  <!-- Pre alert modal content -->
  <div class="tab-pane fade text-center" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  
  <i class="far fa-bell fa-5x blue-text text-center"></i>   
    <h2>How To Create A Pre Alert</h2><br>
      As soon as you receive your tracking number, create a pre alert.
      This allows us to be able to to give you updates on your package as soon as it reaches our warehouse. 
      Please note that all packages will be shipped once we have been provided with copies of the invoice. 
      Creating a pre alert will reduce the risk of the package being returned due to the customer name being unidentified. 
      Please ensure the purchase invoice is uploaded when creating the pre alert.
  </div>
  <!-- Overseas address modal content -->
  <div class="tab-pane fade text-center" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <i class="far fa-envelope fa-5x blue-text"></i><br>
    <h2>Notifications</h2><br>
    Track your package on your customer dashboard at every stage until it reaches you.
     Also, you will be notified about your order status 
     via email notifications and notifications on your dashboard.



  </div>
</div>
              </div>

              <!-- Footer -->
              <div class="modal-footer">
                    <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal" id="update_login_token">OK</a>
              </div>
            </div>
            <!-- Content -->
          </div>
        </div>
        <!-- Central Modal Large Info -->

          <!--Section: Classic admin cards-->
      <section>

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-xl-4 col-md-6 mb-4">

            <!--Card Success-->
            <div class="card classic-admin-card primary-color">
              <div class="card-body">
                <div class="pull-right">
                  <i class="far fa-money-bill-alt"></i>
                </div>
                <p class="white-text">Total Shipments Value</p>
                <h4>$30,000 JMD</h4>
              </div>
              <div class="progress">
                <div class="progress-bar bg grey darken-3" role="progressbar" style="width: 25%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="card-body">
                <p>Better than last month (25%)</p>
              </div>
            </div>
            <!--/.Card Success-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-xl-4 col-md-6 mb-4">

            <!--Card Default-->
            <div class="card classic-admin-card warning-color">
              <div class="card-body">
                <div class="pull-right">
                  <i class="fas fa-chart-line"></i>
                </div>
                <p>Total Payments Due</p>
                <h4>$2,000</h4>
              </div>
              <div class="progress">
                <div class="progress-bar bg grey darken-3" role="progressbar" style="width: 25%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="card-body">
                <p>Worse than last week (25%)</p>
              </div>
            </div>
            <!--/.Card Default-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-xl-4 col-md-6 mb-4">

            <!--Card Blue-->
            <div class="card classic-admin-card light-blue lighten-1">
              <div class="card-body">
                <div class="pull-right">
                  <i class="fas fa-box"></i>
                </div>
                <p>Packages For Pick Up</p>
                <h4>2</h4>
              </div>
              <div class="progress">
                <div class="progress-bar bg grey darken-4" role="progressbar" style="width: 50%" aria-valuenow="50"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="card-body">
                <p>Better than last week (50%)</p>
              </div>
            </div>
            <!--/.Card Blue-->

          </div>
          <!--Grid column-->

          
          </div>
          <div class="container-fluid">

      

        <!-- First row -->
        <div class="row">

          <!-- First column -->
          <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

            <!-- Card -->
            
  
              
            </div>
            <!-- Card -->

          </div>
          <!-- First column -->
  
          <!-- Second column -->
          <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

            <!-- Card -->
            
              
            <!-- Card -->

          </div>
          <!-- Second column -->
  
          <!-- Third column -->
          <div class="col-xl-3 col-md-6 mb-md-0 mb-4">

            
            <!-- Card -->

          </div>
          <!-- Third column -->
  
          <!-- Fourth column -->
          <div class="col-xl-3 col-md-6 mb-0">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
  
                
              
            </div>
            <!-- Card -->

          </div>
          <!-- Fourth column -->

        </div>
        <!-- First row -->

      </section>
      <!-- Todo list row -->
      
      <section class="mb-3">
        
        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-4">

            <!--Panel-->
            <div class="card">
              <div class="card-header white-text primary-color">
                News Feed
              </div>
              <!--/.Card-->
              <div class="card-body pt-0 px-1">

                <!--Card content-->
                <div class="card-body text-center">

                  <div class="list-group list-panel">
                    <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Car car
                      <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Click to fix"></i></a>
                    <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Dapibus ac
                      facilisi<i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Click to fix"></i></a>
                    <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Morbi leo risus
                      <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Click to fix"></i></a>
                    <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Porta ac
                      consectet<i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Click to fix"></i></a>
                    <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Vestibulum at
                      eros <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Click to fix"></i></a>
                  </div>

                </div>
                <!--/.Card content-->

              </div>
              <!--/.Card-->

            </div>
            <!--Panel-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <!--Panel-->
            <div class="card">
              <div class="card-header white-text primary-color">
                Tasks to do
              </div>
              <!--/.Card-->
              <div class="card-body pt-0 px-1">

                <!--Card content-->
                <div class="card-body text-center">

                  <div class="list-group list-panel">
                    <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Cras justo odio
                      <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Click to fix"></i></a>
                    <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Dapibus ac
                      facilisi<i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Click to fix"></i></a>
                    <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Morbi leo risus
                      <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Click to fix"></i></a>
                    <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Porta ac
                      consectet<i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Click to fix"></i></a>
                    <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Vestibulum at
                      eros <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Click to fix"></i></a>
                  </div>

                </div>
                <!--/.Card content-->

              </div>
              <!--/.Card-->

            </div>
            <!--Panel-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <!--Panel-->
            <div class="card">
              <div class="card-header white-text primary-color">
                Statistics
              </div>
              <!--/.Card-->
              <div class="card-body pt-0 px-1">

                <!--Card content-->
                <div class="card-body text-center">

                  <div class="list-group list-panel">
                    <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Cras justo odio
                      <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Click to fix"></i></a>
                    <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Dapibus ac
                      facilisi<i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Click to fix"></i></a>
                    <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Morbi leo risus
                      <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Click to fix"></i></a>
                    <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Porta ac
                      consectet<i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Click to fix"></i></a>
                    <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Vestibulum at
                      eros <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Click to fix"></i></a>
                  </div>

                </div>
                <!--/.Card content-->

              </div>
              <!--/.Card-->

            </div>
            <!--Panel-->

          </div>
          <!--Grid column-->
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

          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Classic admin cards-->
      <Section class ="mb-3">
        <!-- Third row -->

            <!-- Third row -->
            <div class="row mb-0">

              <!-- First column -->
              <div class="col-md-12">

                <!-- Panel content -->
                <div class="card-body pt-0">

                  <!-- Table -->
                  <div class="table-responsive">

                    <table class="table table-hover">

                      <!-- Table head -->
                      <thead class="rgba-stylish-strong white-text">

                        <tr>
                          <th>Queries</th>
                          <th>Clicks</th>
                          <th>Impressions</th>
                          <th>CTR</th>
                          <th>Position</th>
                          <th>Day</th>
                          <th>Week</th>
                          <th>Month</th>
                          <th>Local</th>
                          <th>Global</th>
                        </tr>

                      </thead>
                      <!-- Table head -->

                      <!-- Table body -->
                      <tbody>

                        <tr class="none-top-border">

                          <td>bootstrap material design</td>
                          <td>1000</td>
                          <td>10000</td>
                          <td>5%</td>
                          <td>3.21</td>
                          <td>2 <span class="badge primary-color">1 <i class="fas fa-arrow-circle-up"></i></span></td>
                          <td>2 <span class="badge red accent-2">1 <i class="fas fa-arrow-circle-down"></i></span></td>
                          <td>2 <span class="badge grey">0 </span></td>
                          <td>200 (US)</td>
                          <td>2000</td>

                        </tr>

                        <tr>

                          <td>bootstrap material design</td>
                          <td>1000</td>
                          <td>10000</td>
                          <td>5%</td>
                          <td>3.21</td>
                          <td>2 <span class="badge primary-color">1 <i class="fas fa-arrow-circle-up"></i></span></td>
                          <td>2 <span class="badge red accent-2">1 <i class="fas fa-arrow-circle-down"></i></span></td>
                          <td>2 <span class="badge grey">0 </span></td>
                          <td>200 (US)</td>
                          <td>2000</td>

                        </tr>
                        <tr>

                          <td>bootstrap material design</td>
                          <td>1000</td>
                          <td>10000</td>
                          <td>5%</td>
                          <td>3.21</td>
                          <td>2 <span class="badge primary-color">1 <i class="fas fa-arrow-circle-up"></i></span></td>
                          <td>2 <span class="badge red accent-2">1 <i class="fas fa-arrow-circle-down"></i></span></td>
                          <td>2 <span class="badge grey">0 </span></td>
                          <td>200 (US)</td>
                          <td>2000</td>

                        </tr>

                      </tbody>
                      <!-- Table body -->
                    </table>

                  </div>
                  <!-- Table -->

                  <!-- Bottom Table UI -->
                  <div class="d-flex justify-content-between">

                    <!-- Name -->
                    <select class="mdb-select colorful-select dropdown-primary mt-2">
                      <option value="" disabled>Rows number</option>
                      <option value="1" selected>5 rows</option>
                      <option value="2">25 rows</option>
                      <option value="3">50 rows</option>
                      <option value="4">100 rows</option>
                    </select>

                    <!-- Pagination -->
                    <nav class="my-4">
                      <ul class="pagination pagination-circle pg-blue mb-0">

                        <!-- First -->
                        <li class="page-item disabled clearfix d-none d-md-block"><a class="page-link">First</a></li>

                        <!-- Arrow left -->
                        <li class="page-item disabled">
                          <a class="page-link" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>

                        <!-- Numbers -->
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">3</a></li>
                        <li class="page-item"><a class="page-link">4</a></li>
                        <li class="page-item"><a class="page-link">5</a></li>

                        <!-- Arrow right -->
                        <li class="page-item">
                          <a class="page-link" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>

                        <!-- First -->
                        <li class="page-item clearfix d-none d-md-block"><a class="page-link">Last</a></li>

                      </ul>
                    </nav>
                    <!-- Pagination -->

                  </div>
                  <!-- Bottom Table UI -->

      </Section>

    </div>
@endsection
