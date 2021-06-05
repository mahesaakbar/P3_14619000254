<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>

	<center><h1>Data Dokter</h1></center>>

	
	<br/>
	<br/>

	<form action="/dokter/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

	<!DOCTYPE html>
<html>
<head>
	<title>Read Data</title>
</head>
<body>

	<center><h1>Data Dokter</h1></center>

	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID</th>
            <th>Nama</th>
			<th>Jabatan</th>
		</tr>
		@foreach($dokter as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->jabatan }}</td>
            <td>
            
            </td>
		</tr>
		@endforeach
	</table>


</body>
</html>