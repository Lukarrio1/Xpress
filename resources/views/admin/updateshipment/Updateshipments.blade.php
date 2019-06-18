@extends('layouts.admin')
@section('content')
 <style>
}
.input-group.md-form.form-sm.form-2 input.red-border  {
    border: 1px solid red;
}

</style>
<!--Section heading-->
      <div class="mt-lg-5 mb-5 mt--3">
        <h4 class=" mt--3text-left font-weight-bold dark-grey-text">Update Shipments</h4>
        <p class="grey-text mt-3">Add all client new shipments info below. </p>
        <hr>
      </div>
   <div class="container-fluid">
<form class="form-inline md-form form-sm active-purple active-purple-2 mt-2">
  <i class="fas fa-search" aria-hidden="true"></i>
  <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
    aria-label="Search">
</form>
<!-- Grid column -->
            <div class="col-lg-3 col-md-6">

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
              <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-th-large mt-0"></i></button>
              <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-columns mt-0"></i></button>
            </div>

            <a href="" class="white-text mx-3">Table name</a>

            <div>
              <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-pencil-alt mt-0"></i></button>
              <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-eraser mt-0"></i></button>
              <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-info-circle mt-0"></i></button>
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
                    <th class="th-lg"><a>First Name <i class="fas fa-sort ml-1"></i></a></th>
                    <th class="th-lg"><a href="">Last Name<i class="fas fa-sort ml-1"></i></a></th>
                    <th class="th-lg"><a href="">Username<i class="fas fa-sort ml-1"></i></a></th>
                    <th class="th-lg"><a href="">Email<i class="fas fa-sort ml-1"></i></a></th>
                    <th class="th-lg"><a href="">Country<i class="fas fa-sort ml-1"></i></a></th>
                    <th class="th-lg"><a href="">City<i class="fas fa-sort ml-1"></i></a></th>
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
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>markotto@gmail.com</td>
                    <td>USA</td>
                    <td>San Francisco</td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <input class="form-check-input" type="checkbox" id="checkbox2">
                      <label class="form-check-label" for="checkbox2" class="label-table"></label>
                    </th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>jacobt@gmail.com</td>
                    <td>France</td>
                    <td>Paris</td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <input class="form-check-input" type="checkbox" id="checkbox3">
                      <label class="form-check-label" for="checkbox3" class="label-table"></label>
                    </th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>larrybird@gmail.com</td>
                    <td>Germany</td>
                    <td>Berlin</td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <input class="form-check-input" type="checkbox" id="checkbox4">
                      <label class="form-check-label" for="checkbox4" class="label-table"></label>
                    </th>
                    <td>Paul</td>
                    <td>Topolski</td>
                    <td>@P_Topolski</td>
                    <td>ptopolski@gmail.com</td>
                    <td>Poland</td>
                    <td>Warsaw</td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <input class="form-check-input" type="checkbox" id="checkbox5">
                      <label class="form-check-label" for="checkbox5" class="label-table"></label>
                    </th>
                    <td>Anna</td>
                    <td>Doe</td>
                    <td>@andy</td>
                    <td>annadoe@gmail.com</td>
                    <td>Spain</td>
                    <td>Madrid</td>
                  </tr>
                </tbody>
                <!-- Table body -->
              </table>
              <!-- Table -->
            </div>

          

            

          </div>
        </div>

      </section>
      

      

   </div>
@endsection