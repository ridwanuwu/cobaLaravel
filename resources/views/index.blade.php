<!DOCTYPE html>
<html>
<head>
	<title>Ruang Baca</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
 
	<h2>Selamat Datang</h2>
	<h3>Data Anggota</h3>
 
	<a href="/anggota/tambah"> + Tambah Anggota Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Telp Anggota</th>
			<th>Alamat</th>
		</tr>
		@foreach($anggota as $p)
		<tr>
			<td>{{ $p->ID_ANGGOTA }}</td>
			<td>{{ $p->NAMA_ANGGOTA }}</td>
			<td>{{ $p->JENIS_KELAMIN }}</td>
			<td>{{ $p->NO_TELP_ANGGOTA }}</td>
			<td>{{ $p->ALAMAT }}</td>
			<td>
				<a href="/anggota/edit/{{ $p->ID_ANGGOTA }}">Edit</a>
				|
				<a href="/anggota/hapus/{{ $p->ID_ANGGOTA }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>