@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-md-12">
	 
		<div class="box-body">

		<div class="card">
              <div class="card-header">
              <center><h4>Daftar infraction</h4></center>
                <h3 class="card-title"><a href="/infraction/add" class="btn btn-success">+  Add New Infraction
		</a></h3> 
		<h3 class="card-title padding-right"><a href="/infraction/add-code" class="btn btn-success">+  Add New Code
		</a></h3>
              </div>
              <!-- /.card-header -->
			  <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  	<th>No</th>
                  	<th>Code Infraction</th>
                    <th>Name Infraction</th>
                    <th>Point</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
		@foreach($infraction as $i)
		<tr>
			<td>{{ $i->id }}</td>
			<td>{{ $i->code }}</td>
			<td>{{ $i->name_infraction }}</td>
			<td>{{ $i->point }}</td>
			<td>
				<a href="/infraction/edit/{{ $i->id }}" class="btn btn-primary">Edit</a>
				<a href="/infraction/delete/{{ $i->id }}" class="btn btn-danger">Delete</a>
			
			</td>
		</tr>
		@endforeach
        </tbody>
        </table>


             </div>
             <!-- /.card-body -->
		</div>

@endsection