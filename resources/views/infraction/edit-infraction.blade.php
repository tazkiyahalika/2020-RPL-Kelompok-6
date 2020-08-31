@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
	
	<table style="height: 100px">

	@foreach($infraction as $i)

		<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">           	
                <a href="{{URL::to('/infraction')}}" class="fa fa-arrow-left"></a>
                <center><h3>Update List infraction</h3></center>
              </div>

		<form action="/infraction/update/{{$i->id}}" method="post">
		@csrf
		
			<div class="card-body">
			<div class="form-group">
	             <label for="exampleInputPassword1">Name Infraction</label>
	             <input type="text" class="form-control" id="exampleInputPassword1" name="name_infraction" placeholder="name_infraction" value="{{$i->name_infraction}}">
	        </div>

	        <div class="form-group">
	             <label for="exampleInputPassword1">Point</label>
	             <input type="text" class="form-control" id="exampleInputPassword1" name="point" placeholder="point" value="{{$i->point}}">
	        </div>
	
			<div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                </div>
		</form>
	
	@endforeach

</body>

@endsection

@section('scripts')
@endsection
</html>