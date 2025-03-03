<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

        $User = UserModel::create(
            [
                'username' => 'manager11',
                'nama' => 'Manager 11',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ]
        );

        $User->username = 'manager12';

        $User->save();

        $User->wasChanged(); // true
        $User->wasChanged('username'); // true
        $User->wasChanged(['username', 'level_id']); // true
        $User->wasChanged(['nama']); // false
        dd($User->wasChanged(['nama', 'username'])); //true





        return view('user', ['data' => $User]);


    }
}
