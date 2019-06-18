@extends('layouts.admin')
@section('content')
<div class="container-fluid pt-3 pb-5">
<section> 
<!-- Top Table UI -->

        <div class="card card-cascade narrower z-depth-1">

          <!-- Card image -->
          <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

            <div>
               </div>

            <a href="" class="white-text mx-3">View All Updated Shipments</a>

            <div>
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
                       </th>
                    <th class="th-lg"><a>First Name <i class=""></i></a></th>
                    <th class="th-lg"><a href="">Tracking No.<i class=""></i></a></th>
                    <th class="th-lg"><a href="">Reference No.<i class=""></i></a></th>
                    <th class="th-lg"><a href="">Recipient<i class=""></i></a></th>
                    <th class="th-lg"><a href="">Description<i class=""></i></a></th>
                    <th class="th-lg"><a href="">Delivery Date<i class=""></i></a></th>
                    <th class="th-lg"><a href="">Shipping Charge<i class=""></i></a></th>
                    <th class="th-lg"><a href="">Status<i class=""></i></a></th>
                  
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
                    
                  </tr>
                  <tr>
                    <th scope="row">
                      <input class="form-check-input" type="checkbox" id="checkbox2">
                      <label class="form-check-label" for="checkbox2" class="label-table"></label>
                    </th>
                    <td>Jacob</td>
                   
                  </tr>
                  <tr>
                    <th scope="row">
                      <input class="form-check-input" type="checkbox" id="checkbox3">
                      <label class="form-check-label" for="checkbox3" class="label-table"></label>
                    </th>
                    <td>Larry</td>
                    
                  </tr>
                  <tr>
                    <th scope="row">
                      <input class="form-check-input" type="checkbox" id="checkbox4">
                      <label class="form-check-label" for="checkbox4" class="label-table"></label>
                    </th>
                    <td>Paul</td>
                   
                  </tr>
                  <tr>
                    <th scope="row">
                      <input class="form-check-input" type="checkbox" id="checkbox5">
                      <label class="form-check-label" for="checkbox5" class="label-table"></label>
                    </th>
                    <td>Anna</td>
                   
                  </tr>
                </tbody>
                <!-- Table body -->
              </table>
              <!-- Table -->
            </div>

            <hr class="my-0">

            <!-- Bottom Table UI -->
            <div class="d-flex justify-content-between">

              
            </div>
            <!-- Bottom Table UI -->

          </div>
        </div>

      </section>
      </div>
@endsection