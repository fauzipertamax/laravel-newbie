<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
		//return "Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com";
		$nama = "Ahmad Fauzi";
		$pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
		return view ('biodata',['namaku' => $nama, 'matkul' => $pelajaran]);
	}
	
}
