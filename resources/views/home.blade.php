@extends('layouts.app')

@section('content')
{{--  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">User Dashboard</div>
                <div class="panel-body">
                  <p class="lead">{{auth()->user()->verified() ? ' ' : 'Your account is not verified check your email to verify..'}}
</p>
</div>
</div>
</div>
</div>
</div> --}}

<!--/Pagination -->

<!--Section: Main panel-->

<!-- Central Modal Large Info -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#todomodalview" style="display: none" id="viewTASK">
</button>

<!-- Modal -->
<div class="modal " id="todomodalview" tabindex="-1" role="dialog" aria-labelledby="todomodalview"
  aria-hidden="true">
  <div class="modal-dialog modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white text-center">
        <h5 class="modal-title" id="exampleModalLabel">Task <small id="tasktime"></small></h5>
      </div>
      <div class="modal-body" id="taskbody">
      
      </div>
      <div class="modal-footer">
         <span id="taskcompleted"></span>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closetaskmodal">Close</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="btn btn-primary waves-effect waves-light " data-toggle="modal"
  data-target="#centralModalLGInfoDemo" id="modal" style="display:none;">
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
            Name : <span id="modalname"></span><br>
            Address line 1: 2736 NW 29th Terrace,<br>
            Address line 2: Bldg 13 Lauderdale Lakes,<br>
            City / State : Oakland, Florida<br>
            Zipcode : 33311 <br>
            Xl number:<span id="modalxl"></span>

          </div>
          <!-- Pre alert modal content -->
          <div class="tab-pane fade text-center" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            <i class="far fa-bell fa-5x blue-text text-center"></i>
            <h2>How To Create A Pre Alert</h2><br>
            As soon as you receive your tracking number, create a pre alert.
            This allows us to be able to to give you updates on your package as soon as it reaches our warehouse.
            Please note that all packages will be shipped once we have been provided with copies of the invoice.
            Creating a pre alert will reduce the risk of the package being returned due to the customer name being
            unidentified.
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
<!-- To Do Modal-->

<!-- Modal -->
<div class="modal fade" id="taskmodal" tabindex="-1" role="dialog" aria-labelledby="taskmodal" aria-hidden="true">

  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Task    <span class="text-danger" id="errortask"></span></h5>
      </div>
      <div class="modal-body">
        <div class="md-form">
          <i class="fas fa-pencil prefix grey-text"></i>
         
          <textarea type="text" id="todotextarea" class="md-textarea form-control" rows="4"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closetodo">Close</button>
        <button type="button" class="btn btn-primary" id="savetodo">Add Task</button>
      </div>
    </div>
  </div>
</div>


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
          <h4 id="shipmentscount">0</h4>
        </div>
          <div class="progress">
            <div class="progress-bar bg grey darken-4" role="progressbar" style="width: 0%"
              aria-valuemin="0" aria-valuemax="100" id="shipmentbar"></div>
          </div>
          <div class="card-body">
            <p><span id="shipmentpercent"></span>% of packages picked up</p>
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
    <!-- Central Modal Small -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newsmodal" style="display: none" id="newsbtn">
    </button>

    <!-- Modal -->
    <div class="modal " id="newsmodal" tabindex="-1" role="dialog" aria-labelledby="newsmodal"
      aria-hidden="true">
      <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white text-center">
            <h5 class="modal-title" id="exampleModalLabel">News <small id="newtime"></small></h5>
          </div>
          <div class="modal-body" id="newmessage">
          
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Central Modal Small -->
    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

      <!--Panel-->
      <div class="card">
        <div class="card-header white-text primary-color">
          News Feed
          <span class="badge fa-pull-right align-right text-white" id="newscount">0</span>
        </div>
        <!--/.Card-->
        <div class="card-body pt-0 px-1">

          <!--Card content-->
          <div class="card-body text-center">

            <div class="list-group list-panel" id="allnews">
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
          <i href="#" class="fas fa-plus fa-pull-right align-right text-white" data-toggle="modal"
            data-target="#taskmodal" id="taskmodal" data-placement=top title="Add new task"></i>
        </div>
        <!--/.Card-->
        <div class="card-body pt-0 px-1">

          <!--Card content-->
          <div class="card-body text-center">

            <div class="list-group list-panel" id="todosection">

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
                <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                  title="Click to fix"></i></a>
              <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Dapibus ac
                facilisi<i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                  title="Click to fix"></i></a>
              <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Morbi leo risus
                <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                  title="Click to fix"></i></a>
              <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Porta ac
                consectet<i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                  title="Click to fix"></i></a>
              <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Vestibulum at
                eros <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                  title="Click to fix"></i></a>
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

<section class="pb-5">
  <!--Section: Classic admin cards-->

  <div class="row mb-0 ">

    <!-- First column -->
    <div class="col-md-12">
      <div class="card bg-white">




      </div>
    </div>
</section>

</div>
@endsection