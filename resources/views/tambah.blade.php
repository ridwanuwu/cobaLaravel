<!DOCTYPE html>
<html>
<head>
	<title>Ruang Baca</title>
</head>
<body>
 
	<h2><a>Ruang Baca</a></h2>
	<h3>Data Anggota</h3>
 
	<a href="/anggota"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/anggota/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jenis Kelamin (L/P)<input type="text" name="jenis_kelamin" required="required"> <br/>
		Telp <input type="text" name="tlp" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>