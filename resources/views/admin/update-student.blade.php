<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
	<center><h1>Update List Student</h1></center> 

	
	<table style="height: 100px">

	@foreach($admin as $a)

	<form action="/admin/update/{{$a->id}}" method="post">
		{{ csrf_field() }}
		
			<tr>
				<td>Name</td>
				<td>:</td>
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
				<td>Derection</td>
				<td>:</td>
				<td><input type="text" name="derection"></td>

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
	

			<br/>
			<br/>
	
			<td>
				<input type="submit" name="simpan">
				<input type="reset" name="reset">
			<br/>

				<a href="/admin">Back</a> 
			</td>
		</tr>
		</table>
	</form>
	@endforeach

</body>
</html>