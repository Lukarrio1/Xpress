@extends('layouts.admin')
@section('content')
<style>
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
                              <th>Name</th>
                              <th>Telephone</th>
                              <th>Email</th>
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
  




  <!-- Main layout -->
@endsection