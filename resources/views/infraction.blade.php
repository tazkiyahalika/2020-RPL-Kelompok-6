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
				<td>Name infraction</td>
				<td>:</td>
				{{-- <td><input type="text" name="name infraction"></td> --}}
				{{-- kasih name jangan pake spasi tapi pake underscore _ --}}
				<td><input type="text" name="name_infraction"></td>
			</tr>
			<tr>
			<td>point</td>
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