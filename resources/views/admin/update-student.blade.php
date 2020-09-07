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
                    <label for="exampleInputPassword1">Class</label>
                    <select type="text" class="form-control" id="exampleInputPassword1" name="class" placeholder="class" value="{{$s->class}}">
                                  <option>--pilih--</option>
                                      <option>X</option>
                                      <option>XI</option>
                                      <option>XII</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Direction</label>
                    <select type="text" class="form-control" id="exampleInputPassword1" name="direction" placeholder="Direction" value="{{$s->direction}}">
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
                    <label for="exampleInputPassword1">gender</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="gender" placeholder="gender" value="{{$s->gender}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPoint">Point</label>
                    <select type="text" class="form-control" id="exampleInputPoint" name="point" placeholder="point" value="{{$s->point}}">
                                      <option>--pilih--</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>5</option>
                                      <option>10</option>
                                      <option>20</option>
                                      <option>40</option>
                                      <option>50 SP1</option>
                                      <option>60 SP2</option>
                                      <option>100 DO</option>
                    </select>
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