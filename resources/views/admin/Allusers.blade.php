@extends('layouts.admin') @section('content')
<div class="container-fluid">
  <!-- Section: Customers -->
  <section class="section team-section">
    <!-- First row -->
    <div class="row">
      <!-- First column -->
      <div class="col-md-8">
        <div class="row mb-1">
          <div class="col-md-9">
            <h4 class="h4-responsive mt-1">Your Clients</h4>
          </div>
          <div class="col-md-3">
            <div class="md-form">
              <input
                placeholder="Search..."
                type="text"
                class="form-control"
                id="usersearch"
              />
              {{-- <button class="fas-fa-search"></button> --}}
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-1">
            <!-- Tabs -->
            <div class="card card-cascade narrower z-depth-1 mt-5">
              <div
                class="view view-cascade  bg-danger narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center"
              >
                <div></div>
                <a class="white-text align-content-center mx-3 h4"
                  >All Users <span id="usercount" class="badge blue">0</span>
                </a>
                <div></div>
              </div>
              <div class="text-center border border-light p-5">
                <table class="table  table-hover mb-0 table-sm">
                  <thead>
                    <tr>
                      <th>XL#:</th>
                      <th>Name</th>
                      <th>telephone</th>
                      <th>Email</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody id="alluserbody"></tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-md-0 mb-5" id="usercardbody">
    </div>
  </section>
</div>
       @endsection