@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-md-12">
	<h4>Daftar Siswa</h4> 
		<div class="box-body">

		<a href="/admin/add" class="btn btn-success">+  Add New Student
		</a>
                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  	<th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Class</th>
                    <th>Direction</th>
                    <th>Gender</th>
                    <th>Point</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
		@foreach($students as $student)
		<tr>
			<td>{{ $student->id }}</td>
			<td>{{ $student->name }}</td>
			<td>{{ $student->email }}</td>
			<td>{{ $student->password }}</td>
			<td>{{ $student->class }}</td>
			<td>{{ $student->direction }}</td>
			<td>{{ $student->gender }}</td>
			<td>{{ $student->point }}</td>
			<td>
				<a href="/admin/edit/{{ $student->id }}" class="btn btn-primary">Edit</a>
				<a href="/admin/hapus/{{ $student->id }}" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
        </tbody>
        </table>


              </div>
		</div>
	</div> 
</div>

@endsection