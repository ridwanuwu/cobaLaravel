<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
	public function index()
	{
  		// mengambil data dari table anggota
    	$anggota = DB::table('anggota')->get();
 
    	// mengirim data anggota ke view index
    	return view('index',['anggota' => $anggota]);
    }

   // method untuk menampilkan view form tambah anggota
	public function tambah()
	{
 
	// memanggil view tambah
	return view('tambah');
 
	}

	// method untuk insert data ke table anggota
	public function store(Request $request)
	{
	// insert data ke table anggota
	DB::table('anggota')->insert([
		'nama_anggota' => $request->nama,
		'jenis_kelamin' => $request->jenis_kelamin,
		'no_telp_anggota' => $request->tlp,
		'alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman anggota
	return redirect('/anggota');
 
	}

	// method untuk edit data anggota
	public function edit($id)
	{
	// mengambil data anggota berdasarkan id yang dipilih
	$anggota = DB::table('anggota')->where('id_anggota',$id)->get();
	// passing data anggota yang didapat ke view edit.blade.php
	return view('edit',['anggota' => $anggota]);
 
	}

	// update data anggota
	public function update(Request $request)
	{
	// update data anggota
	DB::table('anggota')->where('id_anggota',$request->id)->update([
		'nama_anggota' => $request->nama,
		'jenis_kelamin' => $request->jenis_kelamin,
		'no_telp_anggota' => $request->tlp,
		'alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman anggota
	return redirect('/anggota');
	}

	// method untuk hapus data anggota
	public function hapus($id)
	{
	// menghapus data anggota berdasarkan id yang dipilih
	DB::table('anggota')->where('id_anggota',$id)->delete();
		
	// alihkan halaman ke halaman anggota
	return redirect('/anggota');
	}
}
