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

            <a href="" class="white-text align-content-center mx-3">Invoices</a>

            <div>
              {{--  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-pencil-alt mt-0"></i></button>
              <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-eraser mt-0"></i></button>
              <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-info-circle mt-0"></i></button>  --}}
            </div>

          </div>
          <!-- /Card image -->

          <div class="px-4">

            <div class="table-responsive">
              <!-- Table -->
              <table class="table table-hover mb-0">

                <!-- Table head -->
                <thead>
                  <tr>
                    <th>
                      <input class="form-check-input" type="checkbox" id="checkbox">
                      <label class="form-check-label" for="checkbox" class="mr-2 label-table"></label>
                    </th>
                    <th class="th-lg"><a href="">XL Number<i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a>First Name <i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a href="">Last Name<i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a href="">Email<i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a href="">Vendor Name<i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a href="">Tracking No.<i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a href="">Courier<i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a href="">Product<i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a href="">Value<i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a href="">Weight<i class=" ml-1"></i></a></th>
                    <th class="th-lg"><a href="">Invoice<i class=" ml-1"></i></a></th>
                    </tr>
                </thead>
                <!-- Table head -->

                <!-- Table body -->
                <tbody>
                  <tr>
                    <th scope="row">
                      <input class="form-check-input" type="checkbox" id="checkbox1">
                      <label class="form-check-label" for="checkbox1" class="label-table"></label>
                    </th>
                    <td>10002</td>
                    <td>Timothy</td>
                    <td>Russell</td>
                    <td>russelltimothy2@gmail.com</td>
                    <td>Amazon</td>
                    <td>1wr544dni8shd8s</td>
                    <td>Fedex</td>
                    <td>Phone Case for Samsung galaxy s9 plus.</td>
                    <td>$9.99</td>
                    <td>1 lbs</td>
                    <td>Invoice.pdf</td>
                   
                  </tr>
                  <tr>
                    <th scope="row">
                      <input class="form-check-input" type="checkbox" id="checkbox2">
                      <label class="form-check-label" for="checkbox2" class="label-table"></label>
                    </th>
                    <td>10003</td>
                    <td>Jason</td>
                    <td>Ennis</td>
                    <td>tomennis1997@gmail.com</td>
                    <td>Swappa</td>
                    <td>23mdjkjka8ahd8ad676dhasdh</td>
                    <td>UPS</td>
                    <td>Google Pixel 3 XL</td>
                    <td>$700</td>
                    <td>1 lbs</td>
                    <td>Invoice2.pdf</td>
                    </tr>
                  <tr>
                             
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

              <!-- Pagination -->
              <nav class="my-4">
                <ul class="pagination pagination-circle pg-blue mb-0">

                  <!-- First -->
                  <li class="page-item disabled clearfix d-none d-md-block"><a class="page-link">First</a></li>

                  <!-- Arrow left -->
                  <li class="page-item disabled">
                    <a class="page-link" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>

                  <!-- Numbers -->
                  <li class="page-item active"><a class="page-link">1</a></li>
                  <li class="page-item"><a class="page-link">2</a></li>
                  <li class="page-item clearfix d-none d-md-inline-block"><a class="page-link">3</a></li>
                  <li class="page-item clearfix d-none d-md-inline-block"><a class="page-link">4</a></li>
                  <li class="page-item clearfix d-none d-md-inline-block"><a class="page-link">5</a></li>

                  <!-- Arrow right -->
                  <li class="page-item">
                    <a class="page-link" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>

                  <!-- First -->
                  <li class="page-item clearfix d-none d-md-block"><a class="page-link">Last</a></li>

                </ul>
              </nav>
              <!-- /Pagination -->

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