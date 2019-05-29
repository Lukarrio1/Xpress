@extends('layouts.app')
@section('content')
    <!-- Material form register -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Schedule Delivery Form</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="FirstName" class="form-control">
                        <label for="FirstName">First name</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="LastName" class="form-control">
                        <label for="LastName">Last name</label>
                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="text" id="deliveryaddress" class="form-control">
                <label for="deliveryaddress">Delivery Address</label>
            </div>
            
            <!-- Phone number -->
            <div class="md-form mt-0">
                <input type="number" id="phonenumber" class="form-control">
                <label for="phonenumber">Phone Number</label>
            </div>

            <!-- Express Delivery -->
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="expressdelivery">
                <label class="form-check-label" for="expressdelivery">Select for Express Delivery</label>
            </div>

            <!-- Submit button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Submit Request</button>

            
        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register

    
@endsection