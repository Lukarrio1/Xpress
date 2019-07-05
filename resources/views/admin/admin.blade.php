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



      <!-- Section: Analytical panel -->
      

      </section>
      <!-- Section: Analytical panel -->

      
<!-- Section: Cards color -->
      <!-- Section: Intro -->
      <section class="mt-md-4 pt-md-2 mb-3 pb-4">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">

              <!-- Card Data -->
              <div class="admin-up">
                <i class="far fa-money-bill-alt bg-success mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Shipment Value</p>
                  <h4 class="font-weight-bold dark-grey-text"><span id="adminshipmentvalue">0</span></h4>
                </div>
              </div>

              <!-- Card content -->
              <div class="card-body card-body-cascade">
                
              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">

              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-chart-line warning-color mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Invoice Value </p>
                  <h4 class="font-weight-bold dark-grey-text"><span id="adminInvoiceValue">0</span> </h4>
                </div>
              </div>

              <!-- Card content -->
              <div class="card-body card-body-cascade">
                
              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-xl-3 col-md-6 mb-md-0 mb-2">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">

              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-chart-pie light-blue lighten-1 mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Total Clients</p>
                  <h4 class="font-weight-bold dark-grey-text"><span id="totalusercount">0</span></h4>
                </div>
              </div>

              <!-- Card content -->
              <div class="card-body card-body-cascade">
                
              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-xl-3 col-md-6 mb-0">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">

              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-chart-bar red accent-2 mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Verified Users</p>
                  <h4 class="font-weight-bold dark-grey-text"><span id="verifieduserscount">0</span></h4>
                </div>
              </div>

              <!-- Card content -->
              <div class="card-body card-body-cascade">
                
              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Intro -->

      
                <!-- Card content -->
          <div class="card-body card-body-cascade pb-5">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-6 col-md-12">
  
            <!-- Panel -->
            <div class="card mb-4">

              <div class="card-header white-text bg-danger">
                <h5 class="font-weight-500 my-1">Incoming Deliveries</h5>
              </div>

              <div class="card-body">

                <table class="table">
                  <tbody id="adminincomedeliveries">
                    
                  </tbody>
                </table>
  
              <a href="{{route('admin.delivery')}}" class="btn btn btn-flat  lighten-3 btn-rounded waves-effect font-weight-bold dark-grey-text float-right btn-dash">View all Deliveries</a>
  
              </div>

            </div>
            <!-- Panel -->
  
            
            <!-- Panel -->
  
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-6 col-md-12">
  
            <!-- Panel -->
            <div class="card mb-4">

              <div class="card-header white-text bg-danger">
                <h5 class="font-weight-500 my-1">Users activity</h5>
              </div>

              <div class="card-body">

                <div class="row my-2 pt-1">
                  <div class="col-4">
                    <small class="grey-text">Undelivered Deliveries</small>
                    <h4><span id="undelivereddeliveries">0</span></h4>
                  </div>
                  <div class="col-4">
                    <small class="grey-text">Deleted Users</small>
                    <h4><span id="deleteduserscount">0</span></h4>
                  </div>
                  
                  <div class="col-4">
                    <small class="grey-text">Incomplete Invoices</small>
                    <h4><span id="adminincompletedinvoice">0</span></h4>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-4">
                    <small class="grey-text">Total Sipments</small>
                    <h4><span id="admintotalshipment">0</span></h4>
                  </div>
                  <div class="col-4">
                    <small class="grey-text">Total Invoices</small>
                    <h4><span id="admintotalinvoices">0</span></h4>
                  </div>
                  <div class="col-4">
                    <small class="grey-text">Total News </small>
                    <h4><span id="admintotalnews">0</span></h4>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-4">
                    {{-- <small class="grey-text">Pages/Visits</small>
                    <h4>419</h4> --}}
                  </div>
                  <div class="col-4">
                    {{-- <small class="grey-text">New visitors</small>
                    <h4>51.94%</h4> --}}
                  </div>
                  <div class="col-4">
                    {{-- <small class="grey-text">Last week</small>
                    <h4>51 932</h4> --}}
                  </div>
                </div>
              </div>

            </div>
            <!-- Panel -->
  
           
            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-md-6 mb-md-0 mb-4">

                  

                </div>
                <!-- Panel -->

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-6 mb-0">


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
<!-- Card -->
@endsection
