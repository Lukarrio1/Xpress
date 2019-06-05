@extends('layouts.admin')
@section('content')
<section>
    <div class="col-md-12">
    <div class="card card-cascade narrower z-depth-1 mt-5">
        <div
            class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between text-center">
                    <a class="h4 white-text  mx-3">News Form</a>
            </div>
            <div class="text-center border border-light p-5">
                <!-- Heading -->
                <div class="form-group">
                    <input type="text" id="newsubject" class="form-control mb-4" placeholder="Subject">
                    <span class="text-danger" id="errorsubject"></span>
                </div>

                <!-- Message -->
                <div class="form-group">
                    <textarea class="form-control rounded-0" id="newsbody" rows="4" placeholder="News Body"></textarea>
                    <span class="text-danger" id="errorbody"></span>
                </div>

                <!-- Send button -->
                <button class="btn btn-info btn-block" id="newsendbtn">Send</button>

            </div>
       
    </div>
</div>
</section>
@endsection