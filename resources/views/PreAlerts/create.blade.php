@extends('layouts.app')
@section('content')
<section>
    <!-- Pre Alerts Form-->
<div class="card col-sm-12 col-md-10 offset-md-1 mt-4 mb-5">

    <h5 class="card-header bg-danger white-text text-center py-4">
        <strong>Create Pre Alert Notification</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-1">

        <!-- Form -->
        <form id="createAlertForm" class="text-left" style="color: #757575;" action="{{route('Pre.Alerts.store')}}" method="Post" enctype=multipart/form-data>
            {{ csrf_field() }}
            <!-- Vendor Name -->
            <div class="md-form mt-4">
                <input type="text" id="vendorname" class="form-control" name="vender">
                <label for="vendorname"> Vendor Name</label>
                <span id="errorvenname" class="text-danger"></span>
            </div>

            <!-- Tracking Number -->
            <div class="md-form">
                <input type="text" id="trackingnumber" class="form-control" name="tracking">
                <label for="trackingnumber">Tracking Number</label>
                 <span id="errortnumber" class="text-danger"></span>
            </div>
                      
        <select class="browser-default form-control custom-select mb-5" name="courier" id="courier">
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
                <input type="text" id="name_pkg" class="form-control"placeholder="John Brown XL0001" name="pkgname">
                <label for="name_pkg"> Name on Package</label>
                <span id="errorpkg" class="text-danger"></span>
            </div>
            
            <div class="form-group">
            <label for="Description">Product Description</label>
            <textarea class="form-control rounded-0" id="Description" rows="3" placeholder="Product Description" name="description"></textarea>
                </div>
                <!-- Package Value -->
            <div class="md-form">
                <input type="number" id="itemvalue" class="form-control" name="value">
                <label for="itemvalue">Item Value(USD)$ </label>
            </div>
            <!-- Package Weight -->
            <div class="md-form">
                <input type="number" id="pkg_weight" class="form-control" name="weight">
                <label for="pkg_weight">Weight  </label>
            </div>
            <div class="md-form">
                       
                        <input placeholder="Selected date" type="text" id="updeliverydate" class="form-control datepicker" name="expected_date">
                        <label for="date-picker-example">Expected Delivery Date</label>
                        <span id="errordate" class="text-danger">
                        </span>
                    </div>
            <div class="file-field">
        <a class="btn-floating peach-gradient mt-0 float-left">
    <i class="fas fa-paperclip" aria-hidden="true"></i>
        <input type="file" id="pkg_in" name="invoice">
        </a>
        <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload your file" id="pkg_out" autocomplete="off">
    </div>
  </div>

            <!-- Submit button -->
            <button id="preAlertSubmit" class="btn btn-danger btn-block z-depth-0 my-4 waves-effect" type="submit">Submit Pre Alert</button>

        </form>
        <!-- Form -->

    </div>

</div>
</section>
<!-- Material form contact -->


@endsection