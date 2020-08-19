<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
</head>
<body>
	<center><h1>Add List Student</h1></center> 
	<form action="/admin/store" method="post">
		@csrf
		<table style="height: 100px">
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
	
			<td>
				<input type="submit" name="simpan">
				<input type="reset" name="reset">
			</td>
		</tr>
		</table>
	</form>

</body>
</html>