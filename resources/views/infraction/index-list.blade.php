@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-md-12">
	<h4>Daftar Infracttion</h4> 
		<div class="box-body">

		<a href="/infraction/add" class="btn btn-success">+  Add New Infraction
		</a>


                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  	<th>No</th>
                    <th>Name Infraction</th>
                    <th>Point</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
		@foreach($infraction as $i)
		<tr>
			<td>{{ $i->id }}</td>
			<td>{{ $i->name_infraction }}</td>
			<td>{{ $i->point }}</td>
			<td>
				<a href="/infraction/edit/{{ $i->id }}" class="btn btn-primary">Edit</a>
				<a href="/infraction/hapus/{{ $i->id }}" class="btn btn-danger">Delete</a>
				<a href="/infraction/{{ $i->id}}" class="btn btn-primary">Detail</a>
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