@extends('master')

@section('content')

<table class="table table-responsive table-hover">
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Department Name</th>
		<th>Info</th>
    <th>Action</th>
	</tr>
	@foreach($student as $stu)
	<tr>
		<th>#</th>
		<th>{{$stu->name}}</th>
		<th>{{$stu->departmant_name}}</th>
		<th>{{$stu->info}}</th>
    <th><a href="{{route('edit',$stu->id)}}" class="btn btn-success">Edit</a>
    <form action="{{route('delete',$stu->id)}}" method="post" class="form-inline">
      {{csrf_field()}}
      <input type="submit" name="Delete" class="btn btn-danger" value="Delete">

    </form>

    </th>

	</tr>
	@endforeach
</table>
@endsection
<script type="text/javascript" src="{{asset('bootstrap/css/bootstrap.min.js')}}"></script>
</body>
</html>