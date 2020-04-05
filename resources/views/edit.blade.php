@extends('master')
@section('content')
Create new Student
<form class="form-horizontal" action="{{route('update',$stu->id)}}" method="post">
  {{csrf_field()}}
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" value="{{$stu->name}}" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="resid">Registration Id:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="resid" value="{{$stu->registration_id}}" name="resid">
      </div>
    </div>
        <div class="form-group">
      <label class="control-label col-sm-2" for="dptname">Department Name</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="dptname" value="{{$stu->departmant_name}}" name="dptname">
      </div>
    </div>
          <div class="form-group">
      <label class="control-label col-sm-2" for="info">Info</label>
      <div class="col-sm-10">          
        <textarea rows="10" class="form-control" id="info" value=""  name="info">{{$stu->info}}</textarea>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
@endsection