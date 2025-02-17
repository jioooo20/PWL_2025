<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        return 'Hello Worldd';
    }

    public function greeting(){
        // return view('blog.hello', ['name' => 'babaaaa']);
        return view('blog.hello')
        ->with('name', 'Babaaaa')
        ->with('occupation', 'Writer');
    }
}
