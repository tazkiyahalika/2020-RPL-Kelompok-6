<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
</head>
<body>
	<center><h1>Add Infraction Data</h1></center> 
	<form action="/infraction/store" method="post">
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

</body>
</html>