<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller 
{
    public function index()
    {
        $nama = "Dewi Ika Ratnawati";
        $pelajaran = ["Algoritma & Pemrograman", "kalkulus", "Pemrograman Web"];
        return view('home', compact('nama', 'pelajaran'));
    }
}
