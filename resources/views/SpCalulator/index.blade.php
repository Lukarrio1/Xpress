@extends('layouts.app') @section('content')
<div class="container-fluid pt-4 pb-5">
  <ul
    class="nav nav-tabs nav-justified md-tabs bg-danger"
    id="myTabJust"
    role="tablist"
  >
    <li class="nav-item">
      <a
        class="nav-link active"
        id="home-tab-just"
        data-toggle="tab"
        href="#seafreight-just"
        role="tab"
        aria-controls="seafreight-just"
        aria-selected="true"
        >Sea Freight</a
      >
    </li>

    <li class="nav-item">
      <a
        class="nav-link"
        id="airfreight-tab-just"
        data-toggle="tab"
        href="#airfreight-just"
        role="tab"
        aria-controls="airfreight-just"
        aria-selected="false"
        >Air Freight</a
      >
    </li>
  </ul>
  <div class="tab-content card pt-5" id="myTabContentJust">
    <div
      class="tab-pane fade show active"
      id="seafreight-just"
      role="tabpanel"
      aria-labelledby="seafreight-tab-just"
    >
      <!-- Default form subscription -->
      <div class="text-center border border-light p-5">
        <p class="h3 mb-4">Sea Freight</p>

       
        <!-- Shipping Length -->
        <input
          type="number"
          id="shippinglength"
          class="form-control mb-4"
          placeholder="Shipping Length"
        />
        <!-- Width -->
        <input
          type="number"
          id="shippingwidth"
          class="form-control mb-4"
          placeholder="Shipping Width"
        />
        <!-- Weight -->
        <input
          type="number"
          id="shippingheight"
          class="form-control mb-4"
          placeholder="Shipping Height "
        />

        <!-- Price -->
        <input
          type="number"
          id="itemprice"
          class="form-control mb-4"
          placeholder="Item Price (usd)"
        />
        <!--Result -->

        <!-- Calculate button -->
        <button
          class="btn btn-danger btn-block"
          data-toggle="modal"
          data-target="#calculateresult"
          type="button"
          id="calculatesea"
        >
          Calculate
        </button>

        {{-- //Sea Freight Modal --}}
        <div
          class="modal fade"
          id="calculateresult"
          tabindex="-1"
          role="dialog"
          aria-labelledby="calculateresult"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="">Sea Freight Results</h5>
              </div>
              <div class="modal-body">
                <div class="h5 text-left">
                  Freight Charge : <span id="fcharge">0</span><br />
                  Service Charge : <span id="scharge">0</span><br />
                  Total Charges : <span id="fctotal">0</span><br />
                </div>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal"
                >
                  Close
                </button>
              </div>
            </div>
            
          </div>
        </div>
        
      </div>
      <!-- Default form subscription -->
      <div class="">
        <span>N.B.</span>
        <p class"">1. All rates shown in this calculator are only the rates we charge for shipping and does not include customs fees.<br>2. All rates are subjects to change.<br> 3. All rates shown in this calculator are estimates and due to changes in exchange rate or otherwise.<br>4. Items valued at $50 USD or more will attract a customs fee.<br>5. Items deemed to be commercial in purpose, will attract customs fees regardless of the value of the items.</p>
        
      </div>
    </div>
    <div
      class="tab-pane fade"
      id="airfreight-just"
      role="tabpanel"
      aria-labelledby="airfreight-tab-just"
    >
      <!-- Default form subscription -->
      <div class="text-center border border-light p-5">
        <p class="h3 pb-5 mb-4">Air Freight Calculator</p>

        <!-- Weight -->
        <input
          type="number"
          id="Airweight"
          class="form-control mb-4"
          placeholder="Enter Shipping Weight"
        />
        <!-- Price -->
        <input
          type="number"
          id="Airitemprice"
          class="form-control mb-4"
          placeholder="Enter Item cost (usd)"
        />

        <!-- Calculate button -->
        <button
          class="btn btn-danger btn-block"
          data-toggle="modal"
          data-target="#calculateresultair"
          type="button"
          id="calculateair"
        >
          Calculate
        </button>
        {{-- //Air Freight Modal --}}
        <div
          class="modal fade"
          id="calculateresultair"
          tabindex="-1"
          role="dialog"
          aria-labelledby="calculateresultair"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="">Air Freight Results</h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="h5 text-left">
                  Freight fee : <span id="airfreifee">$0.00</span><br />
                  Processing fee:<span id="airprocfee">$0.00 </span><br />
                  Total :<span id="airtotal">$0.00 </span><br />
                </div>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal"
                >
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="">
        <span>N.B.</span>
        <p class"">1. All rates shown in this calculator are only the rates we charge for shipping and does not include customs fees.<br>2. All rates are subjects to change.<br> 3. All rates shown in this calculator are estimates and due to changes in exchange rate or otherwise.<br>4. Items valued at $50 USD or more will attract a customs fee.<br>5. Items deemed to be commercial in purpose, will attract customs fees regardless of the value of the items.</p>
        
      </div>
    </div>
  </div>
</div>
  @endsection
