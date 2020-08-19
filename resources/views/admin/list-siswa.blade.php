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
                    <th>Derection</th>
                    <th>Gender</th>
                    <th>Point</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
		@foreach($admin as $a)
		<tr>
			<td>{{ $a->id }}</td>
			<td>{{ $a->name }}</td>
			<td>{{ $a->email }}</td>
			<td>{{ $a->password }}</td>
			<td>{{ $a->class }}</td>
			<td>{{ $a->derection }}</td>
			<td>{{ $a->gender }}</td>
			<td>{{ $a->point }}</td>
			<td>
				<a href="/admin/edit/{{ $a->id }}" class="btn btn-primary">Edit</a>
				<a href="/admin/hapus/{{ $a->id }}" class="btn btn-danger">Hapus</a>
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