@extends('layouts.master-student')

@section('content')

<div class="row">
	<div class="col-md-12">
	 
		<div class="box-body">

		 <div class="card">
              <div class="card-header">
              <center><h4>Detail Student</h4></center>
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
                    <th>Infraction</th>
                    <th>Point</th>
                    <th>Email</th>
                  </tr>
                  </thead>
                  <tbody>
    @foreach($user as $student)
					<tr>
						<td>{{ $student->id }}</td>
						<td>{{ $student->name }}</td>
						<td>{{ $student->class }}</td>
						<td>{{ $student->direction }}</td>
						<td>{{ $student->gender }}</td>
            <td>{{ $student->name_infraction }}</td>
						<td>{{ $student->point }}</td>
						<td>{{ $student->email }}</td>
					</tr>
		@endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection