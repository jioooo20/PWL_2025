<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

        $User = UserModel::where('level_id',2)->count();

        return view('user', ['data' => $User]);

        // $user = UserModel::all(); // ambil semua data dari tabel m_user
        // return view('user', ['data' => $user]);
    }
}
