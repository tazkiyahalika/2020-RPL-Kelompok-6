<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<center><h1>Edit Data Pelanggaran</h1></center> 

	<a href="/infraction">Kembali</a> 

	<br/>
	<br/> 

	@foreach($infraction as $i)

	<form action="/infraction/update" method="post">
		{{ csrf_field() }}
		
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
	@endforeach

</body>
</html>