<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<center><h1>Edit Data Pelanggaran</h1></center> 
	@foreach($infraction as $i)

	<form action="/infraction/Update" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="id" value="{{ $i }}">
	</form>

</body>
</html>