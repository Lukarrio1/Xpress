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
      News
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
        id="adminnewssearch"
      />
    </div>
  </div>

  <div class="card card-cascade narrower z-depth-1 pb-4">
    <div
      class="view view-cascade bg-danger narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center"
    >
      <div></div>

      <a href="" class="white-text mx-3">News <span class="badge badge-primary" id="allnewscount">0</span></a>

      <div></div>
    </div>
    <div class="px-4">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr class="text-center">
              <th class="th-lg">
                <a>Subject <i class=""></i></a>
              </th>
              <th class="th-lg">
                <a href="">Body<i class=""></i></a>
              </th>
              <th class="th-lg">
                <a href="">Date Created<i class=""></i></a>
              </th>
              <th class="th-lg">
                <a href=""><i class=""></i></a>
              </th>
            </tr>
          </thead>
          <tbody id="allnewstable">
        
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adminviewnews" style="display:none " id="viewadminnews">
  </button>
  <div class="modal " id="adminviewnews" tabindex="-1" role="dialog" aria-labelledby="adminviewnews"
    aria-hidden="true">
    <div class="modal-dialog" role="document" id="adminnewsmodaltype">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white text-center">
          <h5 class="modal-title" id="exampleModalLabel">News </h5>
          <span class="text-left"><small id="newstime"></small></span>
        </div>
        <div class="modal-body">
          <div id="newssubject" class="h4 text-center"></div>
          <div id="newsbody"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" id="closenewsmodal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
</section>
@endsection