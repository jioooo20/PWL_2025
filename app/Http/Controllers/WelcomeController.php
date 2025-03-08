<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome']
        ];
        $active_menu = 'dashboard';
        return view('welcome', compact('breadcrumb', 'active_menu'));
        // return view('welcome', ['breadcumb' => $breadcumb, 'active_menu' => $active_menu]); sm s
    }
}
