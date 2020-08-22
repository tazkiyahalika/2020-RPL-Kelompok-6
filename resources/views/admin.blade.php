@extends('layout.master')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Kelompok 6 the best</h1> 
	<form method="post">
		@csrf
		<table style="height: 100px">
			<tr>
				<td>Name</td>
				<td>:</td>
				{{-- <td><input type="text" name="name"></td> --}}
				{{-- kasih name jangan pake spasi tapi pake underscore _ --}}
				<td><input type="text" name="name"></td>
			</tr> 

			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" name="password"></td>
			</tr>

			<tr>
				<td>Class</td>
				<td>:</td>
				<td><input type="text" name="class"></td>
			</tr>

			<tr>
				<td>Direction</td>
				<td>:</td>
				<td><input type="text" name="direction"></td>

			</tr>
				<tr>
				<td>Gender</td>
				<td>:</td>
				<td><input type="text" name="gender"></td>
			</tr>

			</tr>
				<tr>
				<td>Point</td>
				<td>:</td>
				<td><input type="text" name="point"></td>
			</tr>
	
			<td>
				<input type="submit" name="simpan">
				<input type="reset" name="reset">
			</td>
		</tr>
		</table>
	</form>
@endsection

@section('scripts')

@endsection

</body>
</html>