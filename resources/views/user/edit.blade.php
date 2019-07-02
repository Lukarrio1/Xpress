@extends('layouts.app')
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
            <i class="fas fa-users danger-color py-4 mr-3 z-depth-2"></i>
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
                  <input type="text" id="name" class="form-control form-control-sm" value="">
                  <span id="errorname" class="text-danger"></span>

                </div>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              {{-- <div class="col-lg-4">

                    <div class="md-form form-sm mb-0">
                      <label for="email" class="placeholder">Email address</label><br>
                      <input type="text" id="email" class="form-control form-control-sm" value="">
                      <span id="erroremail" class="text-danger"></span>
                      
                    </div>

                  </div> --}}
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-6 col-md-12">

                <div class="md-form form-sm mb-0">
                  <label for="telephone" class="placeholder">Telephone</label><br>
                  <input type="number" id="telephone" class="form-control form-control-sm" vaule="">
                  <span id="errorphone" class="text-danger"></span>

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
                  <label for="city" class="placeholder">City</label><br>
                  <input type="text" id="city" class="form-control form-control-sm" value="">
                  <span id="errorcity" class="text-danger"></span>

                </div>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-6">

                <div class="md-form form-sm mb-0">
                  <label for="parish" class="placeholder">Parish</label><br>
                  <input type="text" id="parish" class="form-control form-control-sm" value="">
                  <span id="errorparish" class="text-danger"></span>

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
                  <label for="country" class="placeholder">Country</label><br>
                  <input type="text" id="country" class="form-control form-control-sm" value="">
                  <span id="errorcountry" class="text-danger"></span>

                </div>

              </div>
              <!-- Grid column -->


              <!-- Grid column -->
              <div class="col-lg-6 col-md-12">

                <div class="md-form form-sm mb-0">
                  <label for="address" class="placeholder">Address</label><br>
                  <input type="text" id="address" class="form-control form-control-sm" value="">
                  <span id="erroraddress" class="text-danger"></span>

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
            <span id="usercardimage"></span>
          </div>

          <div class="card-body pt-0 mt-0">

            <!-- Name -->
            <h3 class="mb-3 font-weight-bold"><strong><span id="usercardname"></span></strong></h3>
            <p class="mt-4 text-muted">
              XL Number:<span id="usercardid"></span><br>
              Email:<span id="usercardemail"></span><br>
              Address:<span id="usercardaddress"></span><br>
              Parish: <span id="usercardparish"></span><br>
              City:<span id="usercardcity"></span><br>
              Country: <span id="usercardcountry"></span><br>
              Telephone:<span id="usercardphone"></span><br>
              TRN:<span id="usercardtrn"></span><br></p>
            {{-- <a class="btn btn-danger btn-rounded"   data-toggle="modal" data-target="#basicExampleModal">Delete Account</a> --}}
            <a class="btn btn-danger btn-rounded" id="Deletebtn">Delete Account</a>

            <a href="" class="btn btn-warning btn-rounded" data-toggle="modal" data-target="#darkModalForm">
              Change Password</a>

            <div class="modal fade" id="darkModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
              <div class="modal-dialog form-dark" role="document">
                <!--Content-->
                <div class="modal-content card card-image"
                  style="background-image: url('https://images.unsplash.com/photo-1508345228704-935cc84bf5e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80');">
                  <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                    <!--Header-->
                    <div class="modal-header text-center pb-4">
                      <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel">
                        <strong>Change</strong> <a class="blue-text font-weight-bold"><strong>Password</strong></a></h3>
                      <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                        <span id="closepasswordmodal" aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                      <div class="md-form mb-5">
                        <input type="password" class="form-control validate white-text" id="oldpass" value="">
                        <label for="Form-pass5">Old Password</label>
                        <span id="oldpassword" class="text-danger"></span>
                      </div>
                      <div class="md-form mb-5">
                        <input type="password" class="form-control validate white-text" id="newpass">
                        <label for="Form-pass5">New Password</label>
                        <span id="newpassword" class="text-danger"></span>
                      </div>
                      <div class="md-form mb-5">
                        <input type="password" class="form-control validate white-text" id="confirmpass">
                        <label for="Form-pass5">Confirm Password</label>
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
            <div class="text-center">
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
                      <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>Change
                          Profile</strong> <a class="blue-text font-weight-bold"><strong>Picture</strong></a></h3>
                      <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close" id="imgclose">
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
            </div>
            <!--/.Content-->
          </div>

          <!-- Card -->

        </div>
        <!-- Grid column -->

      </div>
    </div>
</div>
<!-- Grid row -->

</section>


</div>


@endsection