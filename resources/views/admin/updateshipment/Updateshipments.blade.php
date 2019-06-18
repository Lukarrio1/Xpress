@extends('layouts.admin') @section('content')
<style>
    .input-group.md-form.form-sm.form-2 input.red-border {
        border: 1px solid red;
    }
</style>
<!--Section heading-->
<div class="mt-lg-5 mb-5 mt--3">
    <h4 class=" mt--3text-left font-weight-bold dark-grey-text">Update Shipments</h4>
    <p class="grey-text mt-3">Add all client new shipments info below. </p>
    <hr>
</div>
<div class="container-fluid ">
    <div class="modal fade" id="updateshipmentmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-warning" role="document">
            <div class="modal-content">
                <div class="modal-header text-center bg-primary">
                    <h4 class="modal-title w-100 font-weight-bold text-white">Update Shipments</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-hashtag prefix grey-text"></i>
                        <input type="text" id="form34" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form34">Tracking No.</label>
                    </div>

                    <div class="md-form mb-5">
                        <i class="fas fa-hashtag prefix grey-text"></i>
                        <input type="text" id="form34" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form34">Reference No.</label>
                    </div>

                    <div class="md-form">
                        <i class="fas fa-calendar-alt prefix grey-text"></i>
                        <input placeholder="Selected date" type="text" id="date-picker-example" class="form-control datepicker">
                        <label for="date-picker-example">Delivery Date</label>
                    </div>

                    <div class="md-form mb-5">
                        <i class="fas fa-file prefix grey-text"></i>
                        <input type="text" id="form34" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form34">Description</label>
                    </div>

                    <div class="md-form mb-5">
                        <i class="fas fa-money-bill prefix grey-text"></i>
                        <input type="text" id="form34" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form34">Shipping Charge</label>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-danger btn-lg">Status</button>
                        <button type="button" class="btn btn-danger btn-lg dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Delivered to Warehouse</a>
                            <a class="dropdown-item" href="#">In transit to Jamaica</a>
                            <a class="dropdown-item" href="#">At Customs</a>
                            <a class="dropdown-item" href="#">Ready for Pick Up</a>


                        </div>






                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-unique">Submit <i class="fas fa-paper-plane-o ml-1"></i></button>
                    </div>
                </div>
            </div>
        </div>


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

<div class="card card-cascade narrower z-depth-1 pb-4">

    <!-- Card image -->
    <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

        <div>

        </div>

        <a href="" class="white-text mx-3">Update Shipments Page</a>

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
                        <th class="th-lg"><a>XL# <i class=""></i></a></th>
                        <th class="th-lg"><a href="">Name<i class=""></i></a></th>
                        <th class="th-lg"><a href="">Email<i class=""></i></a></th>
                        <th class="th-lg"><a href="">Telephone<i class=""></i></a></th>
                        <th class="th-lg"><a href="">Email<i class=""></i></a></th>
                        <th class="th-lg"><a href="">Actions<i class=""></i></a></th>
                    </tr>
                </thead>
                <!-- Table head -->

                <!-- Table body -->
                <tbody>
                    <tr>
                        <th scope="row">

                        </th>

                    </tr>
                    <tr>
                        <th scope="row">
                        </th>

                    </tr>
                    <tr>
                        <th scope="row">

                        </th>

                    </tr>
                    <tr>
                        <th scope="row">
                        </th>
                        <td>Paul</td>
                        <td>Topolski</td>
                        <td>@P_Topolski</td>
                        <td>ptopolski@gmail.com</td>
                        <td>Poland</td>


                        <td>
                            <button type="button" data-toggle="modal" data-target="#updateshipmentmodal" class="btn btn-outline-blue btn-rounded btn-md px-2"><i class="fas fa-pencil-alt mt-0"></i></button>
                            <div class="text-center">


                            </div>





                        </td>


                    </tr>
                    <tr>
                        <th scope="row">

                        </th>
                        <td>Anna</td>
                        <td>Doe</td>
                        <td>@andy</td>
                        <td>annadoe@gmail.com</td>

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