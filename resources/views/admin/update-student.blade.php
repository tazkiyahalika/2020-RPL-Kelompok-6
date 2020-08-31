@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
	
	
	<table style="height: 100px">

	@foreach($student as $s)

          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">           	
                <a href="{{URL::to('/admin')}}" class="fa fa-arrow-left"></a>
                <center><h3>Update List Student</h3></center>
              </div>
              
              <!-- /.card-header -->
              <!-- form start -->



              <form action="/admin/update/{{$s->id}}" method="post">
              @csrf
   
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">name</label>
                    <input type="name" class="form-control" name="name" placeholder="name" value="{{$s->name}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">class</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="class" placeholder="class" value="{{$s->class}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">direction</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="direction" placeholder="direction" value="{{$s->direction}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">gender</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="gender" placeholder="gender" value="{{$s->gender}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">point</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="point" placeholder="Point" value="{{$s->point}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" value="{{$s->email}}">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                </div>
        
              </form>
	@endforeach

</body>
@endsection

@section('scripts')
@endsection
</html>