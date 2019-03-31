@extends('layouts.app')
@section('content')
<!--Table-->
<div class="table-responsive">
<table class="table table-striped w-100">

  <!--Table head-->
  <thead>
    <tr>
      <th>Tracking No.</th>
      <th>Reference No.</th>
      <th>Recipient</th>
      <th>Description</th>
      <th>Delivery Date</th> 
      <th>Shipping Charge</th>
      <th>Status</th>
      <th>Created At</th>
      <th>Updated At</th>
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
@endsection