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
                <i class="far fa-money-bill-alt primary-color mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Shipment Value</p>
                  <h4 class="font-weight-bold dark-grey-text">0</h4>
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
                  <h4 class="font-weight-bold dark-grey-text">0</h4>
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
                  <h4 class="font-weight-bold dark-grey-text">200</h4>
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
                  <h4 class="font-weight-bold dark-grey-text">2000</h4>
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

              <div class="card-header white-text primary-color">
                <h5 class="font-weight-500 my-1">Incoming Deliveries</h5>
              </div>

              <div class="card-body">

                <table class="table">
                  <tbody>
                    <tr>
                      <td class="border-top-0">Timothy Russell</td>
                      <td class="border-top-0">I want something delivered to mandeville</td>
                      <td class="border-top-0 hour">
                        <span class="grey-text float-right">
                          <i class="far fa-clock-o" aria-hidden="true"></i> 10:30 am June 28,2019
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>Jason Ennis</td>
                      <td>Want something deliver a Joe foot.</td>
                      <td class="hour">
                        <span class="grey-text float-right">
                          <i class="far fa-clock-o" aria-hidden="true"></i> 12:30 am June 23,2019
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>Lemar Henry</td>
                      <td>Send stuff to a place.</td>
                      <td class="hour">
                        <span class="grey-text float-right">
                          <i class="far fa-clock-o" aria-hidden="true"></i> 2:30 pm June 30,2019

                        </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
  
                <a href ="{{route('admin.delivery')}}" class="btn btn btn-flat grey lighten-3 btn-rounded waves-effect font-weight-bold dark-grey-text float-right btn-dash">View all Deliveries</a>
  
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

              <div class="card-header white-text primary-color">
                <h5 class="font-weight-500 my-1">Users activity</h5>
              </div>

              <div class="card-body">

                <div class="row my-2 pt-1">
                  <div class="col-4">
                    <small class="grey-text">Undelivered Deliveries</small>
                    <h4>56</h4>
                  </div>
                  <div class="col-4">
                    <small class="grey-text">In Active Users</small>
                    <h4>4500</h4>
                  </div>
                  
                  <div class="col-4">
                    <small class="grey-text">Unread Invoices</small>
                    <h4>87</h4>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-4">
                    <small class="grey-text">Total Sipments</small>
                    <h4>419</h4>
                  </div>
                  <div class="col-4">
                    <small class="grey-text">Total Invoices</small>
                    <h4>500</h4>
                  </div>
                  <div class="col-4">
                    <small class="grey-text">Total News Added</small>
                    <h4>932</h4>
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
  
                <button class="btn btn btn-flat grey lighten-3 btn-rounded waves-effect font-weight-bold dark-grey-text float-right btn-dash">View full report</button>

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
