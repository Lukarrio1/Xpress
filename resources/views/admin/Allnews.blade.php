@extends('layouts.admin')
@section('content')
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
      News Page
    </h4>
    <p class="grey-text mt-3">View all your news here.</p>
    <hr />
  </div>
  <div class="container-fluid ">
    
  <!-- Grid column -->
  <div class="col-lg-3 col-md-6">
    <div class="form-inline md-form mt-2 ml-2">
      <input
        class="form-control mt-2"
        type="text"
        placeholder="Search"
        style="max-width: 150px;"
        id=""
      />
      <span class="badge badge-danger ml-2 px-1" id=""
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

      <a href="" class="white-text mx-3">News Page</a>

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
                <a href="">News Heading<i class=""></i></a>
              </th>
              <th class="th-lg">
                <a href="">News Subject<i class=""></i></a>
              </th>
              <th class="th-lg">
                <a href="">Date Created<i class=""></i></a>
              </th>
              <th class="th-lg">
                <a href="">Status<i class=""></i></a>
              </th>
              
            </tr>
          </thead>
          <!-- Table head -->

          <!-- Table body -->
          <tbody id=""></tbody>
          <!-- Table body -->
        </table>

        <!-- Table -->
      </div>
    </div>
  </div>
@endsection