@extends('layouts.admin')
@section('content')

   <div class="container-fluid pt-4 pb-5">
    <ul class="nav nav-tabs nav-justified md-tabs bg-danger" id="myTabJust" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#seafreight-just" role="tab" aria-controls="seafreight-just" aria-selected="true">Sea Freight</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="airfreight-tab-just" data-toggle="tab" href="#airfreight-just" role="tab" aria-controls="airfreight-just" aria-selected="false">Air Freight</a>
        </li>
    </ul>
    <div class="tab-content card pt-5" id="myTabContentJust">
        <div class="tab-pane fade show active" id="seafreight-just" role="tabpanel" aria-labelledby="seafreight-tab-just">
            <!-- Default form subscription -->
            <div class="text-center border border-light p-5">

                <p class="h3 mb-4">Sea Freight</p>

                <p> </p>



                <!-- Exchange Rate -->
                <input type="number" id="exchangerate" class="form-control mb-4" placeholder="Exchange Rate">
                <span id="errorexrate"></span>
                <!-- Percentage -->
                <input type="number" id="percentage" class="form-control mb-4" placeholder="Percentage Rate">
                
               
                <!-- Update button -->
                <button class="btn btn-info btn-block" type="button" id="seaupdatebtn">Update Info</button>

                
            </div>
            <!-- Default form subscription -->
        </div>
        <div class="tab-pane fade" id="airfreight-just" role="tabpanel" aria-labelledby="airfreight-tab-just">
            <!-- Default form subscription -->
            <div class="text-center border border-light p-5">

                <p class="h3 pb-5 mb-4">Air Freight Calculator</p>
                <!-- Exchange Rate -->
                <input type="text" id="exchangerate" class="form-control mb-4" placeholder="Exchange Rate">
                
                <!-- Weight 1lbs -->
                <input type="text" id="shippingweight1" class="form-control mb-4" placeholder="Add 1 lbs rate">
                <!-- Weight 2lbs -->
                <input type="text" id="shippingweight2" class="form-control mb-4" placeholder="Add 2 lbs rate">
                <!-- Weight 3lbs-->
                <input type="text" id="shippingweight3" class="form-control mb-4" placeholder="Add 3 lbs rate">
               <!-- Weight 4lbs -->
                <input type="text" id="shippingweight4" class="form-control mb-4" placeholder="Add 4 lbs rate">
               <!-- Weight 5lbs -->
                <input type="text" id="shippingweight5" class="form-control mb-4" placeholder="Add 5 lbs rate">
               <!-- Weight 6lbs -->
                <input type="text" id="shippingweight6" class="form-control mb-4" placeholder="Add 6 lbs rate">
               <!-- Weight 7lbs-->
                <input type="text" id="shippingweight7" class="form-control mb-4" placeholder="Add 7 lbs rate">
               <!-- Weight 8lbs -->
                <input type="text" id="shippingweight8" class="form-control mb-4" placeholder="Add 8 lbs rate">
               <!-- Weight 9lbs-->
                <input type="text" id="shippingweight9" class="form-control mb-4" placeholder="Add 9 lbs rate">
               <!-- Weight 10lbs-->
                <input type="text" id="shippingweight10" class="form-control mb-4" placeholder="Add 10 lbs rate">
               
                <!-- Calculate button -->
                <button class="btn btn-info btn-block" type="button">Update Info</button>

            </div>
            <!-- Default form subscription -->
        </div>

    </div>


    

@endsection