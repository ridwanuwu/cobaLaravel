<!DOCTYPE html>
<html>
<head>
	<title>Ruang Baca</title>
</head>
<body>
 
	<h2><a>Selamat Datang</a></h2>
	<h3>Edit Anggota</h3>
 
	<a href="/anggota"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($anggota as $p)
	<form action="/anggota/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID_ANGGOTA }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->NAMA_ANGGOTA }}"> <br/>
		Jenis Kelamin <input type="text" required="required" name="jenis_kelamin" value="{{ $p->JENIS_KELAMIN }}"> <br/>
		Tlp <input type="text" required="required" name="tlp" value="{{ $p->NO_TELP_ANGGOTA }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->ALAMAT }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>