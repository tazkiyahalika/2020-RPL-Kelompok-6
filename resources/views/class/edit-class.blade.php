@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>update Class</title>
</head>
<body>
	
	<table style="height: 100px">

	@foreach($class as $c)

		<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">           	
                <a href="{{URL::to('/class')}}" class="fa fa-arrow-left"></a>
                <center><h3>Update Class Data</h3></center>
              </div>

		<form action="/class/update/{{$c->id}}" method="post">
		@csrf
		
			<div class="card-body">
			<div class="form-group">
	             <label for="exampleInputPassword1">Name Class</label>
	             <select type="text" class="form-control" id="exampleInputPassword1" name="name_class" placeholder="name class" value="{{$c->name_class}}">
	             		<option>--pilih--</option>
                                      <option>X</option>
                                      <option>XI</option>
                                      <option>XII</option>
	             </select>
	        </div>

	        <div class="form-group">
	             <label for="exampleInputPassword1">Direction</label>
	             <select type="text" class="form-control" id="exampleInputPassword1" name="direction" placeholder="Direction" value="{{$c->direction}}">
	       			<option>--pilih--</option>
                                      <option>Multimedia</option>
                                      <option>Multimedia 1</option>
                                      <option>Multimedia 2</option>
                                      <option>Rekayasa Perangkat Lunak</option>
                                      <option>Rekayasa Perangkat Lunak 1</option>
                                      <option>Rekayasa Perangkat Lunak 2</option>
		             </select>

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