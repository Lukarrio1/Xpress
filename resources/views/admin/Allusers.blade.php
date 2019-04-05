@extends('layouts.admin')
@section('content')
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
                  <input placeholder="Search..." type="text" class="form-control" id="usersearch">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-1">
                <!-- Tabs -->
                <div class="classic-tabs">
                  <!-- Nav tabs -->
                  <div class="tabs-wrapper">
                    <ul class="nav tabs-primary primary-color" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link waves-light active" data-toggle="tab" href="#panel83" role="tab">Personal
                          Clients</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link waves-light" data-toggle="tab" href="#panel84" role="tab">Corporate Clients</a>
                      </li>
                    </ul>
                  </div>
                  <!-- Tab panels -->
                  <div class="tab-content card">
                    <!-- Panel 1 -->
                    <div class="tab-pane fade show active" id="panel83" role="tabpanel">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>XL#:</th>
                              <th>Name</th>
                              <th>telephone</th>
                              <th>Email</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody id="alluserbody">
                          {{-- all the users will show here --}}
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- /.Panel 1 -->
                    <!-- Panel 2 -->
                    <div class="tab-pane fade" id="panel84" role="tabpanel">
                      <div class="table-responsive">
                        <table class="table allusertable">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Company Name</th>
                              <th>Username</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>PiedPiper</td>
                              <td>@piedpiper</td>
                              <td>
                                <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i
                                    class="fas fa-user"></i></a>
                                <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fas fa-times"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Github, Inc</td>
                              <td>@github</td>
                              <td>
                                <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i
                                    class="fas fa-user"></i></a>
                                <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fas fa-times"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Twitter, Inc</td>
                              <td>@twitter</td>
                              <td>
                                <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i
                                    class="fas fa-user"></i></a>
                                <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fas fa-times"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">4</th>
                              <td>Alphabet, Inc</td>
                              <td>@alphabet</td>
                              <td>
                                <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i
                                    class="fas fa-user"></i></a>
                                <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fas fa-times"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">5</th>
                              <td>Adobe Corporation</td>
                              <td>@adobe</td>
                              <td>
                                <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i
                                    class="fas fa-user"></i></a>
                                <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fas fa-times"></i></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- /.Panel 2 -->
                  </div>
                  <!-- /.Tabs -->
                </div>
              </div>
            </div>

          </div>
          <!-- First column -->

          <!-- Second column -->
          <div class="col-md-4 mb-md-0 mb-5" id="usercardbody">

          
            <!-- Card -->

          </div>
          <!-- Second column -->

        </div>
        <!-- First row -->

      </section>
      <!-- Section: Customers -->

    </div>
  
  <!-- Main layout -->
@endsection