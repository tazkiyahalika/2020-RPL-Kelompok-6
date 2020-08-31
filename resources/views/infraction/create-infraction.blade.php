@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
</head>
<body>
	
	<table style="height: 100px">

		<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">           	
                <a href="{{URL::to('/infraction')}}" class="fa fa-arrow-left"></a>
                <center><h3>Add Infraction Data</h3></center>
              </div>

		<form action="/infraction/store" method="post">
		@csrf
		
			<div class="card-body">
			<div class="form-group">
	             <label for="exampleInputPassword1">Name Infraction</label>
	             <input type="text" class="form-control" id="exampleInputPassword1" name="name_infraction" placeholder="name_infraction">
	        </div>

	        <div class="form-group">
	             <label for="exampleInputPassword1">Point</label>
	             <input type="text" class="form-control" id="exampleInputPassword1" name="point" placeholder="point">
	        </div>
	
			<div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                </div>
		</form>

</body>

@endsection

@section('scripts')
@endsection
</html>