<!DOCTYPE html>
<html>
<head>
	<title>KELOMPOK 6</title>
</head>
<body>
 
	<h3>Edit Pelanggaran</h3>
 
	<a href="/infraction/update"> + Edit Pelanggaran Baru</a>
	
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Name infraction</th>
			<th>Point</th>
			<th>Option</th>
		</tr>
		@foreach($infraction as $i)
		<tr>
			<td>{{ $i->name_infraction }}</td>
			<td>{{ $i->point }}</td>
			<td>
				<a href="/infraction/edit/{{ $i->id }}">Edit</a>
				|
				<a href="/infraction/hapus/{{ $i->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>


