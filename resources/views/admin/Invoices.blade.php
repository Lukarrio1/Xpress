@extends('layouts.admin')
@section('content')
<div class="container-fluid">

      <!-- Section: Basic examples -->
      <section>
                <!-- Top Table UI -->
        <div class=" p-2 mb-5">


              <form class="form-inline md-form mt-2 ml-2">
                <input class="form-control mt-2" type="text" placeholder="Search" style="max-width: 150px;">
                <button class="btn btn-sm btn-primary ml-2 px-1"><i class="fas fa-search"></i> </button>
              </form>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <!-- Top Table UI -->

        <div class="card card-cascade narrower z-depth-1">

          <!-- Card image -->
          <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

            <div>
              {{--  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-th-large mt-0"></i></button>
              <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-columns mt-0"></i></button>  --}}
            </div>

            <a  class="white-text align-content-center mx-3">Invoices 
            <span class="spinner-border text-white" role="status" id="invloading">are loading....</span> 
          </a>

            <div>
              {{--  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-pencil-alt mt-0"></i></button>
              <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-eraser mt-0"></i></button>
              <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-info-circle mt-0"></i></button>  --}}
            </div>

          </div>
          <!-- /Card image -->

          <div class="px-4">

            <div class="table-responsive text-nowrap" style="overflow-y: hidden">
              <!-- Table -->
              <table class="table table-hover mb-0 table-sm">

                <!-- Table head -->
                <thead>
                  <tr>
                    <th>
                      {{-- <input class="form-check-input" type="checkbox" id="checkbox">
                      <label class="form-check-label" for="checkbox" class="mr-2 label-table"></label> --}}
                    </th>
                    <th class="th-lg"><a href="">XL Number<i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a>Name <i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a>Email<i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a>Vendor Name<i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a>Tracking No.<i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a>Courier<i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a>Product<i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a>Value<i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a>Weight<i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a>Invoice<i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a>Created <i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a>Updated<i class=" ml-1"></i></a></th>
                    </tr>
                </thead>
                <!-- Table head -->
                <!-- Table body -->
                <tbody id="invoicebody1">
                  </tbody>
                <!-- Table body -->
              </table>
              <!-- Table -->
            </div>

            <hr class="my-0">

            <!-- Bottom Table UI -->
            <div class="d-flex justify-content-between">

              {{--  <!-- Name -->
              <select class="mdb-select colorful-select dropdown-primary mt-2">
                <option value="" disabled>Rows number</option>
                <option value="1" selected>5 rows</option>
                <option value="2">25 rows</option>
                <option value="3">50 rows</option>
                <option value="4">100 rows</option>
              </select>  --}}

            </div>
            <!-- Bottom Table UI -->

          </div>
        </div>

      </section>
      <!-- Section: Basic examples -->

    </div>

    

    </section>
    <!-- Section: Docs link -->

  


@endsection