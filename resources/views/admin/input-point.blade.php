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
              <!-- <form action="/admin/hitung/" method="post"> -->
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
                    <label for="code">Kode Pelanggaran</label>
                    <select type="text" class="form-control" id="code" name="code" placeholder="code">
                    @foreach ($datap as $data)
                    <option value="{{ $data->code }}" > {{ $data->code }}</option>
                    @endforeach            
                    </select>
                  </div>

                   <div class="form-group">
                    <label for="name_infraction">Nama Pelanggaran</label>
                    <select type="text" class="form-control" id="name_infraction" name="name_infraction" placeholder="name_infraction">
                    @foreach ($datap as $data)
                    <option value="{{ $data->name_infraction }}"> {{ $data->name_infraction }}</option>
                    @endforeach            
                    </select>
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