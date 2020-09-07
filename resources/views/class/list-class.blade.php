@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-md-12">
	 
		<div class="box-body">

		 <div class="card">
              <div class="card-header">
              <center><h4>List Class</h4></center>
                <h3 class="card-title"><a href="/class/add" class="btn btn-success">+  Add New Class
		</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  	<th>No</th>
                    <th>Name</th>
                    <th>Direction</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($class as $class)
					<tr>
						<td>{{ $class->id }}</td>
						<td>{{ $class->name_class }}</td>
            <td>{{ $class->direction }}</td>
    						<td>
    							<a href="/class/edit/{{ $class->id }}" class="btn btn-primary">Edit</a>
    							<a href="/class/delete/{{ $class->id }}" class="btn btn-danger">Delete</a>
    						</td>
					</tr>
		@endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection