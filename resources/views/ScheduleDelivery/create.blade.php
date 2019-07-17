@extends('layouts.app')
@section('content')
<section>
<div class="card mt-4">

    <h5 class="card-header bg-danger white-text text-center py-4">
        <strong>Schedule Delivery / Florida Pickup</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <div class="text-center" style="color: #757575;">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="devfname" class="form-control">
                        <label for="FirstName">First name</label>
                        <span class="text-danger" id="errorfname"></span>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="devlname" class="form-control">
                        <label for="LastName">Last name</label>
                        <span class="text-danger" id="errorlname"></span>
                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="text" id="deliveryaddress" class="form-control">
                <label for="deliveryaddress">Delivery Address/Florida Pickup Address</label>
                <span class="text-danger" id="errordelivery"></span>
            </div>
            
            <!-- Phone number -->
            <div class="md-form mt-0">
                <input type="number" id="devphone" class="form-control">
                <label for="phonenumber">Phone Number</label>
                <span class="text-danger" id="errorphone"></span>
            </div>

            <!-- Express Delivery -->
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="expressdelivery">
                <label class="form-check-label" for="expressdelivery" value="true">Select for Express Delivery</label>
            </div>

            <!-- Submit button -->
            <button class="btn btn-danger btn-block my-4 waves-effect z-depth-0" id="devsubmit">Submit Request</button>

            
        </div>
        <!-- Form -->

    </div>

</div>
<section>

    
@endsection