@extends('layouts.admin')
@section('content')

<!-- Main layout -->
<style>
  .form-dark .font-small {
    font-size: 0.8rem;
  }

  .form-dark [type="radio"]+label,
  .form-dark [type="checkbox"]+label {
    font-size: 0.8rem;
  }

  .form-dark [type="checkbox"]+label:before {
    top: 2px;
    width: 15px;
    height: 15px;
  }

  .form-dark .md-form label {
    color: #fff;
  }

  .form-dark input[type=email]:focus:not([readonly]) {
    border-bottom: 1px solid #0984e3;
    -webkit-box-shadow: 0 1px 0 0 #0984e3;
    box-shadow: 0 1px 0 0 #0984e3;
  }

  .form-dark input[type=email]:focus:not([readonly])+label {
    color: #fff;
  }

  .form-dark input[type=password]:focus:not([readonly]) {
    border-bottom: 1px solid #0984e3;
    -webkit-box-shadow: 0 1px 0 0 #0984e3;
    box-shadow: 0 1px 0 0 #0984e3;
  }

  .form-dark input[type=password]:focus:not([readonly])+label {
    color: #fff;
  }

  .form-dark input[type="checkbox"]+label:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 17px;
    height: 17px;
    z-index: 0;
    border: 1.5px solid #fff;
    border-radius: 1px;
    margin-top: 2px;
    -webkit-transition: 0.2s;
    transition: 0.2s;
  }

  .form-dark input[type="checkbox"]:checked+label:before {
    top: -4px;
    left: -3px;
    width: 12px;
    height: 22px;
    border-style: solid;
    border-width: 2px;
    border-color: transparent #0984e3 #0984e3 transparent;
    -webkit-transform: rotate(40deg);
    -ms-transform: rotate(40deg);
    transform: rotate(40deg);
    -webkit-backface-visibility: hidden;
    -webkit-transform-origin: 100% 100%;
    -ms-transform-origin: 100% 100%;
    transform-origin: 100% 100%;
  }

  .form-dark .modal-header {
    border-bottom: none;
  }
</style>

<div class="container-fluid ">

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
            <i class="fas fa-users bg-danger py-4 mr-3 z-depth-2"></i>
            <div class="data">
              <h5 class="font-weight-bold dark-grey-text">Edit Profile</h5>
              <br>
              <span class="text-success tex-center" id="updatesuccess"></span>

            </div>
          </div>
          <!-- Card Data -->

          <!-- Card content -->
          <div class="card-body card-body-cascade">
            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-lg-6 col-md-12">
                <div class="md-form form-sm mb-0">
                  <label for="name" class="placeholder">Name</label><br>
                  <input type="text" id="adminname" class="form-control form-control-sm" value="">
                  <span id="adminerrorname" class="text-danger"></span>

                </div>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
             <div class="col-lg-6">

                    <div class="md-form form-sm mb-0">
                      <label for="email" class="placeholder">Email address</label><br>
                      <input type="text" id="adminemail" class="form-control form-control-sm" value="">
                      <span id="adminerroremail" class="text-danger"></span>
                      
                    </div>

                  </div> 
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-6 col-md-12">

                <div class="md-form form-sm mb-0">
                  
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
                  
                </div>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-6">

                <div class="md-form form-sm mb-0">
                  
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
                 </div>

              </div>
              <!-- Grid column -->


              <!-- Grid column -->
              <div class="col-lg-6 col-md-12">

                <div class="md-form form-sm mb-0">
                  
                </div>

              </div>
            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-md-12">

                <!-- Basic textarea -->
                <div class="md-form mb-0">
                  <a class="btn btn-danger" href="#" id="adminupdate">
                    <span id="updatebtn">Update</span>
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
          <div class="card-header bg-danger text-white h4">Admin Info</div>
          <div class="card-body pt-0 mt-0 ">
            <div class="text-left pt-1">
              Name:  <span id="admincardname"></span><br>
              Email: <span id="admincardemail"></span><br>
            </div>
            <a href="" class="btn btn-warning btn-rounded" data-toggle="modal" data-target="#darkModalForm">
              Change Password</a>

            <div class="modal fade" id="darkModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
              <div class="modal-dialog form-dark" role="document">
                <!--Content-->
                <div class="modal-content card card-image">
                  <div class="text-dark py-5 px-5 z-depth-4">
                    <!--Header-->
                    <div class="modal-header text-center pb-4">
                      <h3 class="modal-title w-100 font-weight-bold" id="myModalLabel">
                      <a class="text-dark font-weight-bold"><strong>Change Password</strong></a>
                      </h3>
                      <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                        <span id="closepasswordmodal" aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                      <div class="md-form mb-5">
                        <input type="password" class="form-control validate text-dark" id="oldpass" value="">
                        <label for="oldpass" class="text-dark">Old Password</label>
                        <span id="oldpassword" class="text-danger"></span>
                      </div>
                      <div class="md-form mb-5">
                        <input type="password" class="form-control validate text-dark" id="newpass">
                        <label for="Form-pass5" class="text-dark">New Password</label>
                        <span id="newpassword" class="text-danger"></span>
                      </div>
                      <div class="md-form mb-5">
                        <input type="password" class="form-control validate text-dark" id="confirmpass">
                        <label for="Form-pass5" class="text-dark">Confirm Password</label>
                        <span id="confirmpassword" class="text-danger"></span>
                      </div>
                      <div class="text-center mb-3 col-md-12">
                        <button class="btn btn-blue btn-block btn-rounded z-depth-1" id="pschbtn">Change</button>
                      </div>

                    </div>


                  </div>
                </div>
              </div>
              <!--/.Content-->
            </div>
            {{-- <div class="text-center">
              <a href="" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#darkchangepicsForm">
                Change Picture</a>
            </div>

            <div class="modal fade" id="darkchangepicsForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
              <div class="modal-dialog form-dark" role="document">
                <!--Content-->
                <div class="modal-content card card-image"
                  style="background-image: url('https://images.unsplash.com/photo-1508345228704-935cc84bf5e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80');">
                  <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                    <!--Header-->
                    <div class="modal-header text-center pb-4">
                      <h3 class="modal-title w-100 text-dark font-weight-bold" id="myModalLabel"><strong>Change
                          Profile</strong> <a class="blue-text font-weight-bold"><strong>Picture</strong></a></h3>
                      <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close" id="imgclose">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                      <form class="md-form" action="{{route('userimage')}}" method="Post" enctype=multipart/form-data id="imgform">
                        <div class="file-field text-center">
                        {{ csrf_field() }}
                        <div class="btn btn-primary btn-sm ">
                          <span>Choose file</span>
                          <input type="file" name="image" required id="fileInput">
                        </div>
                        <div class="text-center mb-3 col-md-12">
                          <button class="btn btn-blue btn-block btn-rounded z-depth-1" type="submit">upload
                            image</button>
                        </div>
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" id="fileNameOutput" type="text" placeholder="Upload your file"
                        value="">
                    </div>
                  </div>
                  </form>
                  <!--Grid row-->
                  <div class="text-center col-md-12">
                    <button class="btn btn-danger btn-block btn-rounded z-depth-1" id="changeimg">
                      remove image</button>
                  </div>
                </div>
              </div>
            </div> --}}
            <!--/.Content-->
          </div>

          <!-- Card -->

@endsection

