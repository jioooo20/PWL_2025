<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about()
    {
        return view('about');
    }
    public function articles($id = null)
    {
        return 'Halaman artikel dengan ID ' . $id;
    }
}
