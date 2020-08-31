@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>input point</title>
</head>
<body>
	
	
	<table style="height: 100px">

          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">           	
                <a href="{{URL::to('/admin')}}" class="fa fa-arrow-left"></a>
                <center><h3>Add Point</h3></center>
              </div>
              
              <!-- /.card-header -->
              <!-- form start -->



              <form action="/admin/hitung/" method="post">
              @csrf
   
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">name</label>
                    <select class="form-control input-sm" name="name" id="name">
                    @foreach ($data as $data)

                    <option value="{{ $data->name }}"> {{ $data->name }}</option>
                    @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">point</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="point" placeholder="Point">
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