@extends('frontend.layouts.app')

@section('frontend_content')
<div class="container-fluid" style="padding-top: 100px">

    <form method="post" action="{{route('profile-edit')}}" id="profileEdit">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" readonly value="{{$get[0]->name}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" readonly value="{{$get[0]->email}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Age</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="age" readonly value="{{$get[0]->age}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Investin Level</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="investing_level" readonly value="{{$get[0]->investing_level}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Source</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="source" readonly value="{{$get[0]->source}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Motivation</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="motivation" readonly value="{{$get[0]->motivation}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Duration</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="duration" readonly value="{{$get[0]->duration}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Investment</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="investment" readonly value="{{$get[0]->investment}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Last Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="last_name" readonly value="{{$get[0]->last_name}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Country Citizen</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="country_citizen" readonly value="{{$get[0]->country_citizen}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Country Residence</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="country_residence" readonly value="{{$get[0]->country_residence}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Account Type</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="account_type" readonly value="{{$get[0]->account_type}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Address1</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="address1" readonly value="{{$get[0]->address1}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Address2</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="address2" readonly value="{{$get[0]->address2}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">State</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="state" readonly value="{{$get[0]->state}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Zip code</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="zip_code" readonly value="{{$get[0]->zip_code}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">City</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="city" readonly value="{{$get[0]->city}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Mobile</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="mobile" readonly value="{{$get[0]->mobile}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Social Link</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="social_link_no" readonly value="{{$get[0]->social_link_no}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Dob</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="dob" readonly value="{{$get[0]->dob}}">
        </div>
        <div class="form-group">
        <span type="submit" id="edit" class="btn btn-primary mb-2">Edit</span>
        <button type="submit" id="update" class="btn btn-primary mb-2">Update</button>
        </div>
    </form>
</div>
@stop
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    $('#update').css('display','none');
    $('#edit').on('click',function(){
    $('input').attr("readonly", false);
    $('#edit').css('display','none');
    $('#update').css('display','block');
    })
//    $("#profileEdit").on("submit", function(){
//         
//  
//    })
});
</script>