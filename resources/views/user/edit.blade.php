@extends('layouts.app')
@section('content')
<!-- Main layout -->
  
    <div class="container-fluid">

      <!-- Section: Team v.1 -->
      <section class="section team-section">

        <!-- Grid row -->
        <div class="row text-center">

          <!-- Grid column -->
          <div class="col-md-8">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card user-card">

              <!-- Card Data -->
              <div class="admin-up d-flex justify-content-start">
                <i class="fas fa-users info-color py-4 mr-3 z-depth-2"></i>
                <div class="data">
                  <h5 class="font-weight-bold dark-grey-text">Edit Profile - <span class="text-muted">Complete your
                      profile</span></h5>
                      <br>
                      <span class="text-success tex-center" id="updatesuccess"></span>
                         
                </div>
              </div>
              <!-- Card Data -->
        
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <form>
                <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-lg-6 col-md-12">
                   
                    <div class="md-form form-sm mb-0">
                         <input type="text" id="name" class="form-control form-control-sm" value="">
                         <span id="errorname" class="text-danger"></span>
                      <label for="name" class="">Name</label>
                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  {{-- <div class="col-lg-4">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="email" class="form-control form-control-sm" value="">
                      <span id="erroremail" class="text-danger"></span>
                      <label for="email" class="">Email address</label>
                    </div>

                  </div> --}}
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-6 col-md-12">

                    <div class="md-form form-sm mb-0">
                      <input type="number" id="telephone" class="form-control form-control-sm" vaule="">
                       <span id="errorphone" class="text-danger"></span>
                      <label for="telephone" class="">Telephone</label>
                    </div>

                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-md-6">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="city" class="form-control form-control-sm" value="">
                      <span id="errorcity" class="text-danger"></span>
                      <label for="city" class="">City</label>
                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-6">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="parish" class="form-control form-control-sm" value="">
                      <span id="errorparish" class="text-danger"></span>
                      <label for="parish" class="">Parish</label>
                    </div>

                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-lg-6 col-md-12">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="country" class="form-control form-control-sm" value="">
                      <span id="errorcountry" class="text-danger"></span>
                      <label for="country" class="">Country</label>
                    </div>

                  </div>
                  <!-- Grid column -->


                  <!-- Grid column -->
                  <div class="col-lg-6 col-md-12">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="address" class="form-control form-control-sm" value="">
                      <span id="erroraddress" class="text-danger"></span>
                      <label for="address" class="">Address</label>
                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  {{-- <div class="col-lg-4 col-md-6">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form8" class="form-control form-control-sm" value="">
                      <label for="form8" class="">Country</label>
                    </div>

                  </div> --}}
                  <!-- Grid column -->
                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-md-12">

                    <!-- Basic textarea -->
                    <div class="md-form mb-0">
                    <a class="btn btn-success" href="#" id="update">
                       <span id="updatebtn"></span>
                    </a>
                    </div>

                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-4">

            <!-- Card -->
            <div class="card profile-card">

              <!-- Avatar -->
              <div class="avatar z-depth-1-half mb-4">
                <img src="https://images.unsplash.com/photo-1550613097-fe6c2c321cd3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1051&q=80" class="rounded-circle" alt="First sample avatar image">  
              </div>

              <div class="card-body pt-0 mt-0">

                <!-- Name -->
                <h3 class="mb-3 font-weight-bold"><strong><span id="usercardname"></span></strong></h3>
                <p class="mt-4 text-muted">  
                  Email:<span id="usercardemail"></span><br>
                  Address:<span id="usercardaddress"></span><br>
                  Parish: <span id="usercardparish"></span><br>
                  City:<span id="usercardcity"></span><br>
                  Country: <span id="usercardcountry"></span><br>
                  Telephone:<span id="usercardphone"></span><br></p>
                {{-- <a class="btn btn-danger btn-rounded"   data-toggle="modal" data-target="#basicExampleModal">Delete Account</a> --}}
                <a class="btn btn-danger btn-rounded"  id="Deletebtn">Delete Account</a>

              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Team v.1 -->

    </div>
  <!-- Button trigger modal -->

  
  {{-- <!-- Modal -->
  <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
            <i class="fa fa-trash" aria-hidden="true"></i> Are you sure you want to delete your Account?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" id="accountdel">Delete</button>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- Main layout -->
@endsection