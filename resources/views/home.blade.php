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
