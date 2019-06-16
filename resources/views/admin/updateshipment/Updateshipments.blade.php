@extends('layouts.admin')
@section('content')
 <style>
}
.input-group.md-form.form-sm.form-2 input.red-border  {
    border: 1px solid red;
}

</style>
   <div class="container-fluid">

      

<section> 
           
  <!--Section heading-->
      <div class="mt-lg-5 mb-5 mt--3">
        <h4 class=" mt--3text-left font-weight-bold dark-grey-text">Update Shipments</h4>
        <p class="grey-text mt-3">Add all client new shipments info below. </p>
        <hr>
      </div>
              <div class="input-group md-form form-sm form-2 pl-0">
  <input class="form-control my-0 py-1 danger-border" type="text" placeholder="Search" aria-label="Search">
  <div class="input-group-append">
    <span class="input-group-text red lighten-2" id="basic-text1"><i class="fas fa-search text-grey"
        aria-hidden="true"></i></span>
  </div>
<!-- Top Table UI -->

        <div class="card card-cascade narrower z-depth-1">

          <!-- Card image -->
          <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

            <div>
              {{--  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-th-large mt-0"></i></button>
              <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-columns mt-0"></i></button>
              --}}
              </div>

            <a href="" class="white-text mx-3">Table name</a>

            <div>
              <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-pencil-alt mt-0"></i></button>
              <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-eraser mt-0"></i></button>
              <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-info-circle mt-0"></i></button>
            </div>

          </div>
          <!-- /Card image -->

          <div class="px-4">

            <div class="table-responsive">
              <!-- Table -->
              <table class="table table-hover mb-0">

                <!-- Table head -->
                <thead>
                  <tr>
                    <th>
                      <input class="form-check-input" type="checkbox" id="checkbox">
                      <label class="form-check-label" for="checkbox" class="mr-2 label-table"></label>
                    </th>
                    <th class="th-lg"><a>First Name <i class="fas fa-sort ml-1"></i></a></th>
                    <th class="th-lg"><a href="">Last Name<i class="fas fa-sort ml-1"></i></a></th>
                    <th class="th-lg"><a href="">Username<i class="fas fa-sort ml-1"></i></a></th>
                    <th class="th-lg"><a href="">Email<i class="fas fa-sort ml-1"></i></a></th>
                    <th class="th-lg"><a href="">Country<i class="fas fa-sort ml-1"></i></a></th>
                    <th class="th-lg"><a href="">City<i class="fas fa-sort ml-1"></i></a></th>
                  </tr>
                </thead>
                <!-- Table head -->

                <!-- Table body -->
                <tbody>
                  <tr>
                    <th scope="row">
                      <input class="form-check-input" type="checkbox" id="checkbox1">
                      <label class="form-check-label" for="checkbox1" class="label-table"></label>
                    </th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>markotto@gmail.com</td>
                    <td>USA</td>
                    <td>San Francisco</td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <input class="form-check-input" type="checkbox" id="checkbox2">
                      <label class="form-check-label" for="checkbox2" class="label-table"></label>
                    </th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>jacobt@gmail.com</td>
                    <td>France</td>
                    <td>Paris</td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <input class="form-check-input" type="checkbox" id="checkbox3">
                      <label class="form-check-label" for="checkbox3" class="label-table"></label>
                    </th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td><button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-th-large mt-0"></i></button>
              <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-columns mt-0"></i></button>
             </td>
                    <td>Germany</td>
                    <td>Berlin</td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <input class="form-check-input" type="checkbox" id="checkbox4">
                      <label class="form-check-label" for="checkbox4" class="label-table"></label>
                    </th>
                    <td>Paul</td>
                    <td>Topolski</td>
                    <td>@P_Topolski</td>
                    <td>ptopolski@gmail.com</td>
                    <td>Poland</td>
                    <td>Warsaw</td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <input class="form-check-input" type="checkbox" id="checkbox5">
                      <label class="form-check-label" for="checkbox5" class="label-table"></label>
                    </th>
                    <td>Anna</td>
                    <td>Doe</td>
                    <td>@andy</td>
                    <td>annadoe@gmail.com</td>
                    <td>Spain</td>
                    <td>Madrid</td>
                  </tr>
                </tbody>
                <!-- Table body -->
              </table>
              <!-- Table -->
            </div>

            <hr class="my-0">

            

          </div>
        </div>

      </section>





{{--  {{--  <style>
}
.input-group.md-form.form-sm.form-2 input.red-border  {
    border: 1px solid red;
}

</style>
   <div class="container-fluid">

      <!-- Section: Customers -->
      <section class="section team-section">

        <!-- First row -->
        <div class="row">

          <!-- First column -->
          <div class="col-md-8">

            {{--  <div class="row mb-1">
              <div class="col-md-9">
                <h4 class="h4-responsive mt-1">Your Clients</h4>
              </div>  --}}
              <!--Section heading-->
      <div class="mt-lg-5 mb-5 mt--3">
        <h4 class=" mt--3text-left font-weight-bold dark-grey-text">Update Shipments</h4>
        <p class="grey-text mt-3">Add all client new shipments info below. </p>
        <hr>
      </div>
              <div class="input-group md-form form-sm form-2 pl-0">
  <input class="form-control my-0 py-1 danger-border" type="text" placeholder="Search" aria-label="Search">
  <div class="input-group-append">
    <span class="input-group-text red lighten-2" id="basic-text1"><i class="fas fa-search text-grey"
        aria-hidden="true"></i></span>
  </div>
</div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-1">
                <!-- Tabs -->
                <div class="classic-tabs">
                  <!-- Nav tabs -->
                  <div class="tabs-wrapper">
                    <ul class="nav tabs-primary primary-color" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link waves-light active" data-toggle="tab" href="#panel83" role="tab">Personal
                          Clients</a>
                      </li>
                                          </ul>
                  </div>
                  <!-- Tab panels -->
                  <div class="tab-content card">
                    <!-- Panel 1 -->
                    <div class="tab-pane fade show active" id="panel83" role="tabpanel">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>XL#:</th>
                              <th>Recipient</th>
                              <th>Email</th>
                              <th>Tracking No.</th>
                              <th>Reference No.</th>
                              <th>Description</th>
                              <th>Delivery Date</th>
                              <th>Arrival Date</th>
                              <th>Shipping Charge</th>
                              <th>Status</th>
                              <th>Created At</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody >
                          	<tr>
	                     	<th scope="row">xl0002</th>
				          	<td>Hello</td>
				        	<td>2122122233</td>
				           	<td>hello there</td>
				    	<td>
				      	<a class="blue-text userid" data-toggle="tooltip" data-placement="top" title="View" id=""><i class="fas fa-user"></i></a>
                  <a class="teal-text" data-toggle="modal" data-target ="#editShipments" title="Edit"><i class="fas fa-pencil-alt"></i></a>
				        	<a class="red-text userdel" data-toggle="tooltip" data-placement="top" title="Remove" id=""><i class="fas fa-times" ></i></a>
				    	</td>
               </tr>
                       </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- /.Panel 1 -->
                    
             
                  </div>
                  <!-- /.Tabs -->
                </div>
              </div>
            </div>

          </div>
          <!-- First column -->

          <!-- Second column -->
          <div class="col-md-4 mb-md-0 mb-5" id="usercardbody">

          
            <!-- Card -->

          </div>
          <!-- Second column -->

        </div>
        <!-- First row -->
<!-- Edit Shipment Modal -->
<div class="modal fade" id="editShipments" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-lg" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100 align-center" id="myModalLabel">Add Shipments Form</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
        <div class="md-form mb-5">
          <input type="text" id="trackingno" class="form-control validate">
          <label data-error="wrong" data-success="right" for="trackingno">Tracking No.</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="referenceno" class="form-control validate">
          <label data-error="wrong" data-success="right" for="referenceno">Reference No.</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="recipient" class="form-control validate">
          <label data-error="wrong" data-success="right" for="recipient">Recipient</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="description" class="form-control validate">
          <label data-error="wrong" data-success="right" for="description">Description</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="deliverydate" class="form-control validate">
          <label data-error="wrong" data-success="right" for="deliverydate">Delivery Date</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="shippingcharge" class="form-control validate">
          <label data-error="wrong" data-success="right" for="shippingcharge">Shipping Charge</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="status" class="form-control validate">
          <label data-error="wrong" data-success="right" for="status">Status</label>
        </div>

        <div class="text-center mb-3">
          <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Add Shipments</button>
        </div>
              
    <!--/.Content-->
  </div>
</div>
      </div>
      
    </div>
  
</div>
<!-- Central Modal Small -->
      </section>
      <!-- Section: Customers -->
      

    </div>
  


  --}}

  <!-- Main layout -->  --}}
@endsection