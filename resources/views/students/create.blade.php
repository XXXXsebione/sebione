@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Students</div>
  <div class="card-body">
       
      <form action="{{ url('students') }}" method="post">
        {!! csrf_field() !!}
        <label>First Name</label></br>
        <input type="text" name="First Name" id="first_name" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="Last Name" id="last_name" class="form-control"></br>
        <label>Tutor</label></br>
        <input type="text" name="Tutor" id="tutor" class="form-control"></br>
        <label>Student Photo</label></br>
        <input type="text" name="Student Photo" id="student_photo" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop