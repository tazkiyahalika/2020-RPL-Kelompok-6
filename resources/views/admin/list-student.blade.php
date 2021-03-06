@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-md-12">
	 
		<div class="box-body">

		 <div class="card">
              <div class="card-header">
              <center><h4>Daftar Siswa</h4></center>
                <h3 class="card-title"><a href="/admin/add" class="btn btn-success">+  Add New Student
		</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  	<th>No</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Direction</th>
                    <th>Gender</th>
                    <th>Point</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($students as $student)
					<tr>
						<td>{{ $student->id }}</td>
						<td>{{ $student->name }}</td>
						<td>{{ $student->class }}</td>
						<td>{{ $student->direction }}</td>
						<td>{{ $student->gender }}</td>
						<td>{{ $student->point }}</td>
						<td>{{ $student->email }}</td>
						<td>
							<a href="/admin/edit/{{ $student->id }}" class="btn btn-primary">Edit</a>
							<a href="/admin/delete/{{ $student->id }}" class="btn btn-danger">Delete</a>
							
						</td>
					</tr>
		@endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection