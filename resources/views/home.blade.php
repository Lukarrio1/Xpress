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
<main>
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
                <p class="heading lead">Modal Info</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="white-text">&times;</span>
                </button>
              </div>

              <!-- Body -->
              <div class="modal-body">
                <div class="text-center">
                  <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam
                    blanditiis ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat.
                    Esse ratione fuga, enim, ab officiis totam.
                  </p>
                </div>
                <img src="https://mdbootstrap.com/wp-content/uploads/2016/11/admin-dashboard-bootstrap.jpg" alt="Sample image"
                  class="img-fluid">

              </div>

              <!-- Footer -->
              <div class="modal-footer">
                <a type="button" class="btn btn-info">Get it now <i class="far fa-gem ml-1"></i></a>
                <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No, thanks</a>
              </div>
            </div>
            <!-- Content -->
          </div>
        </div>
        <!-- Central Modal Large Info -->


      <!--Section: Cascading panels-->
      <section class="mb-3">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-4">

            <!--Panel-->
            <div class="card">
              <div class="card-header white-text primary-color">
                Things to improve
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
      <!--Section: Cascading panels-->

      <!--Section: Classic admin cards-->
      <section>

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-xl-3 col-md-6 mb-4">

            <!--Card Success-->
            <div class="card classic-admin-card primary-color">
              <div class="card-body">
                <div class="pull-right">
                  <i class="far fa-money-bill-alt"></i>
                </div>
                <p class="white-text">SALES</p>
                <h4>2000$</h4>
              </div>
              <div class="progress">
                <div class="progress-bar bg grey darken-3" role="progressbar" style="width: 25%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="card-body">
                <p>Better than last week (25%)</p>
              </div>
            </div>
            <!--/.Card Success-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-md-6 mb-4">

            <!--Card Default-->
            <div class="card classic-admin-card warning-color">
              <div class="card-body">
                <div class="pull-right">
                  <i class="fas fa-chart-line"></i>
                </div>
                <p>SUBSCRIPTIONS</p>
                <h4>200</h4>
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
          <div class="col-xl-3 col-md-6 mb-4">

            <!--Card Blue-->
            <div class="card classic-admin-card light-blue lighten-1">
              <div class="card-body">
                <div class="pull-right">
                  <i class="fas fa-chart-pie"></i>
                </div>
                <p>TRAFFIC</p>
                <h4>20000</h4>
              </div>
              <div class="progress">
                <div class="progress-bar bg grey darken-4" role="progressbar" style="width: 75%" aria-valuenow="75"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="card-body">
                <p>Better than last week (75%)</p>
              </div>
            </div>
            <!--/.Card Blue-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-md-6 mb-4">

            <!--Card Purple-->
            <div class="card classic-admin-card red accent-2">
              <div class="card-body">
                <div class="pull-right">
                  <i class="fas fa-chart-bar"></i>
                </div>
                <p>ORGANIC TRAFFIC</p>
                <h4>2000</h4>
              </div>
              <div class="progress">
                <div class="progress-bar bg grey darken-4" role="progressbar" style="width: 25%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="card-body">
                <p>Better than last week (25%)</p>
              </div>
            </div>
            <!--/.Card Purple-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Classic admin cards-->

    </div>
  </main>
@endsection
