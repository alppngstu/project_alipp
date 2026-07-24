<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        echo " Hi! Selamat Datang di Website Laravel";
    }
    public function about()
    {
        echo " NIM : 2041720205 <br> Nama : Allif Pangestu Aji <br> Kelas : 2RPB"; 
    }
    public function artikel($id)
    {
        echo " “Ini adalah halaman Artikel dengan ID: $id";
    }
}
