@extends('layouts.app') @section('content') {{--
<!--Table-->
<div class="card card-cascade narrower z-depth-1 mt-5">
  <div
    class="view view-cascade bg-danger gradient-card-header  narrower py-3 px-3 mx-5 mb-3 d-flex justify-content-between align-items-center"
  >
    <div></div>
    <a class="white-text align-content-center mx-3 h5"
      >Shipments <span class="badge blue" id="shpcount">0</span>
    </a>
    <div></div>
  </div>
  <div class="table-responsive py-2 text-nowrap">
    <table class="table table-hover mb-0 table-sm">
      <!--Table head-->
      <thead>
        <tr>
          <th>Tracking No.</th>
          <th>Reference No.</th>
          <th>Description</th>
          <th>Delivery Date</th>
          <th>Shipping Charge</th>
          <th>Status</th>
          <th>Shipment Added on</th>
          <th>Collected On</th>
        </tr>
      </thead>
      <tbody id="shipments"></tbody>
    </table>
    <!--Table-->
  </div>
</div>
--}}
<div class="container-fluid">
  <!-- Section: Customers -->
  <section class="section team-section">
    <!-- First row -->
    <div class="row">
      <!-- First column -->
      <div class="col-md-12">
        {{--
        <div class="row mb-1">
          <div class="col-md-9">
            <h4 class="h4-responsive mt-1">My Shipments</h4>
          </div>
        </div>
        --}}
        <div class="row">
          <div class="col-md-12 mb-1">
            <!-- Tabs -->
            <div class="card card-cascade narrower z-depth-1 mt-5">
              <div
                class="view view-cascade  bg-danger narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center"
              >
                <div></div>
                <a class="white-text align-content-center mx-3 h4"
                  >All Shipments <span id="shpcount" class="badge blue">0</span>
                </a>
                <div></div>
              </div>
              <div class="text-center border border-light p-5">
                <table class="table  table-hover mb-0 table-sm">
                  <thead>
                    <tr>
                      <th>Tracking No.</th>
                      <th>Reference No.</th>
                      <th>Description</th>
                      <th>Delivery Date</th>
                      <th>Shipping Charge</th>
                      <th>Status</th>
                      <th>Shipment Added on</th>
                      <th>Collected On</th>
                    </tr>
                  </thead>
                  <tbody id="shipments"></tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
