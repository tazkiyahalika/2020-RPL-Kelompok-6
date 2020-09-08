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
                    <label for="exampleInpuName">name</label>
                    <input type="name" class="form-control" name="name" placeholder="name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputClass">Class</label>
                    <select type="text" class="form-control" id="exampleInputClass" name="class" placeholder="class">
                                  <option>--pilih--</option>
                                      <option>X</option>
                                      <option>XI</option>
                                      <option>XII</option>
                    </select>
                 </div>
                  

                  <div class="form-group">
                    <label for="exampleInputDirection">Direction</label>
                    <select type="text" class="form-control" id="exampleInputDirection" name="direction" placeholder="Direction">
                                      <option>--pilih--</option>
                                      <option>Multimedia</option>
                                      <option>Multimedia 1</option>
                                      <option>Multimedia 2</option>
                                      <option>Rekayasa Perangkat Lunak</option>
                                      <option>Rekayasa Perangkat Lunak 1</option>
                                      <option>Rekayasa Perangkat Lunak 2</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputGender">gender</label>
                    <select type="text" class="form-control" id="exampleInputPassword1" name="gender" placeholder="gender">
                      <option>--pilih--</option>
                      <option>Laki - Laki</option>
                      <option>Perempuan</option>
                      </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail">email</label>
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