@extends('layouts.admin')
@section('content')
<!-- Default form contact -->
<div class="card pt-5 my-5">
 

<form class="text-center border border-light p-5">

    <p class="h4 mb-5">News Form</p>
    
   

    <!-- Heading -->
    <input type="text" id="heading" class="form-control mb-4" placeholder="Heading">


    <!-- Message -->
    <div class="form-group">
        <textarea class="form-control rounded-0" id="newsbody" rows="4" placeholder="News Body"></textarea>
    </div>

    

    <!-- Send button -->
    <button class="btn btn-info btn-block" type="submit">Send</button>

</form>
<!-- Default form contact -->
   
</div>



@endsection