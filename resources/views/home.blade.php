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
                Recent Activity
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

    <section class = "pb-5">
      <!--Section: Classic admin cards-->
      
              <div class="row mb-0 ">

              <!-- First column -->
              <div class="col-md-12">
                <div class ="card bg-white">
              
                   
               

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
                </div>
                </div>
      </section>

    </div>
@endsection
