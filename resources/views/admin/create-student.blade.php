@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
	
	
	<table style="height: 100px">

          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">           	
                <a href="{{URL::to('/admin')}}" class="fa fa-arrow-left"></a>
                <center><h3>Add Student Data</h3></center>
              </div>
              
              <!-- /.card-header -->
              <!-- form start -->



              <form action="/admin/store/" method="post">
              @csrf
   
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">name</label>
                    <input type="name" class="form-control" name="name" placeholder="name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">class</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="class" placeholder="class">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">direction</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="direction" placeholder="direction">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">gender</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="gender" placeholder="gender">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">point</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="point" placeholder="Point">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                </div>
        
              </form>

</body>
@endsection

@section('scripts')
@endsection
</html>