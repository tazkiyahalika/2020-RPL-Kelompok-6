<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
	<center><h1>Update Infraction Data</h1></center> 

	
	<table style="height: 100px">

	@foreach($infraction as $i)

	<form action="/infraction/update/{{$i->id}}" method="post">
		{{ csrf_field() }}
		
			<tr>
				<td>Name infraction</td>
				<td>:</td>
				{{-- <td><input type="text" name="name_infraction"></td> --}}
				{{-- kasih name jangan pake spasi tapi pake underscore _ --}}
				<td><input type="text" name="name_infraction"></td>
			</tr>
		
			<tr>
			<td>point</td>
			<td>:</td>
			<td><input type="text" name="point"></td>
		    </tr>

			<br/>
			<br/>
	
			<td>
				<input type="submit" name="simpan">
				<input type="reset" name="reset">
			<br/>

				<a href="/infraction">Back</a> 
			</td>
		</tr>
		</table>
	</form>
	@endforeach

</body>
</html>