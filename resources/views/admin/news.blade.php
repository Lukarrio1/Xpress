@extends('layouts.admin')
@section('content')
<div class="card card-cascade narrower z-depth-1 mt-5">
    <div
        class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">
        <div>
        </div>
        <a class="white-text align-content-center mx-3 h4">News Form
        </a>
        <div>
        </div>
    </div>
    <div class="text-center border border-light p-5">
        <div class="form-group">
            <input type="text" id="newsubject" class="form-control mb-4" placeholder="Subject">
            <span class="text-danger" id="errorsubject"></span>
        </div>

        <!-- Message -->
        <div class="form-group">
            <textarea class="form-control rounded-0" id="newsbody" rows="4" placeholder="News Body" name="newsbody"></textarea>
            <span class="text-danger" id="errorbody"></span>
        </div>
        <button class="btn btn-info btn-md" id="newsendbtn">Post</button>
    </div>
</div>
</section>
@endsection