@extends('layouts.admin') @section('content')
<style>
  .input-group.md-form.form-sm.form-2 input.red-border {
    border: 1px solid red;
  }
  a:link {
    text-decoration: none;
  }
</style>

<!--Section heading-->
<section>
  <div class="mt-lg-5 mb-5 mt--3">
    <h4 class=" mt--3text-left font-weight-bold dark-grey-text">
      Add Shipments
    </h4>
    <p class="grey-text mt-3">Add all client new shipments info below.</p>
    <hr />
  </div>
  <div class="container-fluid ">
    <div
      class="modal fade"
      id="updateshipmentmodal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-warning" role="document">
        <div class="modal-content">
          <div class="modal-header text-center bg-danger">
            <h4 class="modal-title w-100 font-weight-bold text-white">
              Add Shipment
            </h4>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
              id="closespup"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <i class="fas fa-hashtag prefix grey-text"></i>
              <input type="text" id="uptracting" class="form-control" />
              <label for="uptracting">Tracking No.</label>
              <span id="errortracking" class="text-danger"> </span>
            </div>

            <div class="md-form mb-5">
              <i class="fas fa-hashtag prefix grey-text"></i>
              <input type="text" id="upreference" class="form-control" />
              <label for="upreference">Reference No.</label>
              <span id="errorrefrence" class="text-danger"> </span>
            </div>

            <div class="md-form">
              <i class="fas fa-calendar-alt prefix grey-text"></i>
              <input
                placeholder="Selected date"
                type="text"
                id="updeliverydate"
                class="form-control datepicker"
              />
              <label for="date-picker-example">Delivery Date</label>
              <span id="errordate" class="text-danger"> </span>
            </div>

            <div class="md-form mb-5">
              <i class="fas fa-file prefix grey-text"></i>
              <input type="text" id="updescription" class="form-control" />
              <label for="updescription">Description</label>
              <span id="errordescription" class="text-danger"> </span>
            </div>

            <div class="md-form mb-5">
              <i class="fas fa-money-bill prefix grey-text"></i>
              <input type="number" id="upshipping" class="form-control" />
              <label for="upshipping">Shipping Charge</label>
              <span id="errorcharge" class="text-danger"> </span>
            </div>
            <label for="">Status</label>
            <div class="md-form mb-5">
           <select class="browser-default custom-select" id="upstatus">
                <option value="dw">Delivered to Warehouse</option>
                <option value="Ij">In transit to Jamaica</option>
                <option value="ac">At Customs</option>
                <option value="ru">Ready for Pick Up</option>
              </select>
              <span id="errorstatus" class="text-danger"> </span>
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button class="btn btn-success" id="sendshipment">
                Add<i class="fas fa-paper-plane-o ml-1"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Grid row -->
  </div>
  <!-- Grid column -->
  <div class="col-lg-3 col-md-6">
    <div class="form-inline md-form mt-2 ml-2">
      <input
        class="form-control mt-2"
        type="text"
        placeholder="Search"
        style="max-width: 150px;"
        id="updatesearchuser"
      />
      <span class="badge badge-danger ml-2 px-1" id="updatesearchresult"
        >0</span
      >
    </div>
  </div>
  <!-- Grid column -->

  <!-- Top Table UI -->

  <div class="card card-cascade narrower z-depth-1 pb-4">
    <!-- Card image -->
    <div
      class="view view-cascade bg-danger narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center"
    >
      <div></div>

      <a href="" class="white-text mx-3">Add Shipments</a>

      <div></div>
    </div>
    <!-- /Card image -->

    <div class="px-4">
      <div class="table-responsive">
        <!-- Table -->
        <table class="table table-hover">
          <!-- Table head -->
          <thead>
            <tr>
              <th></th>
              <th class="th-lg">
                <a>XL# <i class=""></i></a>
              </th>
              <th class="th-lg">
                <a href="">Name<i class=""></i></a>
              </th>
              <th class="th-lg">
                <a href="">Email<i class=""></i></a>
              </th>
              <th class="th-lg">
                <a href="">Telephone<i class=""></i></a>
              </th>
              <th class="th-lg">
                <a href="">TRN<i class=""></i></a>
              </th>
              <th class="th-lg">
                <a href="">Actions<i class=""></i></a>
              </th>
            </tr>
          </thead>
          <!-- Table head -->

          <!-- Table body -->
          <tbody id="addshipments"></tbody>
          <!-- Table body -->
        </table>

        <!-- Table -->
      </div>
    </div>
  </div>
</section>
@endsection
