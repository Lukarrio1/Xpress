@extends('layouts.app')
@section('content')
    <!-- Pre Alerts Form-->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Create Pre Alert Notification</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-1">

        <!-- Form -->
        <form class="text-left" style="color: #757575;">

            <!-- Vendor Name -->
            <div class="md-form mt-4">
                <input type="text" id="vendorname" class="form-control">
                <label for="vendorname"> Vendor Name</label>
            </div>

            <!-- Tracking Number -->
            <div class="md-form">
                <input type="number" id="trackingnumber" class="form-control">
                <label for="trackingnumber">Tracking Number</label>
            </div>
                      
        <select class="browser-default custom-select mb-5">
             <option value="" selected="selected">Select Courier</option>
                        <option value="DHL">DHL</option>
                        <option value="FEDEX">FEDEX</option>
                        <option value="USPS">USPS</option>
                        <option value="US Postage">US Postage</option>
                        <option value="UPS">UPS</option>
                        <option value="Amazon Logistics">Amazon Logistics</option>
                        <option value="Other">Other</option>
    </select>


             <!-- Name on Package -->
            <div class="md-form mt-5">
                <input type="text" id="name_pkg" class="form-control"placeholder="John Brown XL0001">
                <label for="name_pkg"> Name on Package</label>
            </div>
            
            <div class="form-group">
            <label for="Description">Product Description</label>
            <textarea class="form-control rounded-0" id="Description" rows="3" placeholder="Product Description"></textarea>
                </div>
                <!-- Package Value -->
            <div class="md-form">
                <input type="number" id="itemvalue" class="form-control">
                <label for="itemvalue">Item Value(USD)$ </label>
            </div>
            <!-- Package Weight -->
            <div class="md-form">
                <input type="number" id="pkg_weight" class="form-control">
                <label for="pkg_weight">Weight (lbs) </label>
            </div>
            

            <!-- Submit button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Submit Pre Alert</button>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form contact -->

    
@endsection