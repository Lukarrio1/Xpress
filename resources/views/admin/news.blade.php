@extends('layouts.admin')
@section('content')
<section>
    <div class="card pt-5 my-5">
<div class="text-center border border-light p-5">

    <p class="h3 mb-1">News Form</p>
    
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
</section>
@endsection