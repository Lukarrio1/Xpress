@extends('layouts.admin') @section('content')
<style>
  .active-blue-2 input[type='text']:focus:not([readonly]) {
    border-bottom: 1px solid #4dd0e1;
    box-shadow: 0 1px 0 0 #4dd0e1;
  }
  .active-red input[type='text'] {
    border-bottom: 1px solid #cc0000;
    box-shadow: 0 1px 0 0 #cc0000;
  }
</style>
<div class="container-fluid pt-3 pb-2">
  <div class="col-md-9">
    <h3 class="h3-responsive mt-1">View All Shipments</h3>
  </div>
  <div class="col-md-3">
    <div class="md-form active-red ">
      <input
        placeholder="Search..."
        type="text"
        class="form-control"
        id="adminsearchshipments"
      />
      {{-- <button class="fas-fa-search"></button> --}}
    </div>
  </div>
</div>
<div class="card card-cascade narrower z-depth-1">
  <div
    class="view view-cascade bg-danger narrower 
        py-2 mx-4 mb-3 d-flex justify-content-between align-items-center"
  >
    <div></div>
    <a href="#" class="white-text mx-3"
      >View All Updated Shipments &nbsp;
      <span id="shipp" class="badge-circle badge-success badge">0</span>
      <span class="badge">/</span>
      <span id="shipa" class="badge badge-circle blue">0</span>
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
            <th>Change Status</th>
          </tr>
        </thead>
        <tbody id="adminshipments"></tbody>
      </table>
    </div>
    <hr class="my-0" />
    <div class="d-flex justify-content-between"></div>
  </div>
</div>
<div
  class="modal fade"
  id="viewshipmentstatus"
  tabindex="-1"
  role="dialog"
  aria-labelledby="viewshipmentstatus"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="">Sea Freight Results</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
          id="closeupdatestatusship"
        ></button>
      </div>
      <div class="modal-body">
        <div class="h5 text-left">
          <select class="browser-default custom-select" id="updatesentstatus">
            <option selected value="status">Status</option>
            <option value="dw">Delivered to Warehouse</option>
            <option value="Ij">In transit to Jamaica</option>
            <option value="ac">At Customs</option>
            <option value="ru">Ready for Pick Up</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button
          type="button"
          class="btn btn-success"
          data-dismiss="modal"
          id="updateshipmentbtn"
        >
          Update Status
        </button>
      </div>
    </div>
  </div>
</div>
@endsection
