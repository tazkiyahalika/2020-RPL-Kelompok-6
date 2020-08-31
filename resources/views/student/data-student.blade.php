@extends('layouts.master-student')

@section('content')

<div class="row">
	<div class="col-md-12">
	 
		<div class="box-body">

		 <div class="card">
              <div class="card-header">
                 <center><h4>List Student</h4></center>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  	<th>No</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Direction</th>
                  </tr>
                  </thead>
                  <tbody>
    @foreach($user as $student)
					<tr>
						<td>{{ $student->id }}</td>
						<td>{{ $student->name }}</td>
						<td>{{ $student->class }}</td>
						<td>{{ $student->direction }}</td>
					</tr>
		@endforeach
                  </tbody>
                  </table>
              </div>
        </div>
    </div>
  </div>
</div> 
  
@endsection