@extends('layouts.app')
@section('content')
<!--Table-->
<div class="card card-cascade narrower z-depth-1 mt-5">
    <div
    class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">
    <div>
    </div>
    <a class="white-text align-content-center mx-3 h5">Shipments <span class="badge red" id="shpcount">0</span>
    </a>
    <div>
    </div>
</div>
<div class="table-responsive py-2">
<table class="table table-striped w-100">

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
  <!--Table head-->

  <!--Table body-->
  <tbody id="shipments">
      </tbody>
  <!--Table body-->


</table>
<!--Table-->
</div>  
</div>
@endsection