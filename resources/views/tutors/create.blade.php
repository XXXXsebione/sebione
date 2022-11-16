@extends('tutors.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Tutor</div>
  <div class="card-body">
       
      <form action="{{ url('tutors') }}" method="post">
        {!! csrf_field() !!}
        <label>Tutors #</label></br>
        <input type="text" name="Tutors ID" id="tutors_id" class="form-control"></br>
        <label>Tutors Name</label></br>
        <input type="text" name="Tutors Name" id="tutors_name" class="form-control"></br>
        <label>Contact #</label></br>
        <input type="text" name="Contact #" id="contact_no" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="Email" id="email" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop