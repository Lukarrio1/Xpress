@extends('layouts.admin') @section('content')
<div class="container-fluid pt-3 pb-5">
  <section>
    <div class="card card-cascade narrower z-depth-1">
      <div
        class="view view-cascade gradient-card-header blue-gradient narrower 
        py-2 mx-4 mb-3 d-flex justify-content-between align-items-center"
      >
        <div></div>
        <a href="#" class="white-text mx-3">View All Updated Shipments 
        &nbsp; <span id="shipp" class="badge-circle badge-success badge">0</span>
        <span class="badge">/</span>
        <span id="shipa" class="badge badge-circle badge-danger">0</span>
        </a>
        <div></div>
      </div>
      <div class="px-4">
        <div class="table-responsive">
          <table class="table table-hover mb-0">
            <thead>
              <tr>
                <th></th>
                <th>XL#</th>
                <th>Tracking No.</th>
                <th>Reference No.</th>
                <th>Description</th>
                <th>Delivery Date</th>
                <th>Shipping Charge</th>
                <th>Status</th>
                <th>Shipment Added on</th>
                <th>Collected On</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="adminshipments"></tbody>
          </table>
        </div>
        <hr class="my-0" />
        <div class="d-flex justify-content-between"></div>
      </div>
    </div>
  </section>
</div>
<div class="modal fade" id="viewshipmentstatus" tabindex="-1" role="dialog" aria-labelledby="viewshipmentstatus"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="">Sea Freight Results </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <div class="h5 text-left">
            Result : <span id=''>112</span><br>
              Result : <span id=''>112</span><br>
                Result : <span id=''>112</span><br>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Change</button>
      </div>
    </div>
  </div>
</div>
@endsection
