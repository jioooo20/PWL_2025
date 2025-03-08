<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'User',
            'list' => ['Home', 'User']
        ];

        $page = (object)[
            'title' => 'Dafter user yang terdaftar di dalam sistem',
        ];
        $active_menu = 'user'; //menu yg sedang aktif

        return view('user.index', compact('breadcrumb', 'page', 'active_menu'));
    }

    public function list(Request $request)
    {
        $users = UserModel::select('user_id', 'username', 'nama', 'level_id')->with('level');
        return datatables()->of($users)
            //menambahkan kolom index / no urut (default nama kolom: DT_RowIndex)
            ->addIndexColumn()
            ->addColumn('aksi', function ($user) {
                $btn = '<a href=" ' . url('/user/' . $user->user_id) . '" class="btn btn-info btn-sm">Detail</a>';
                $btn .= '<a href=" ' . url('/user/' . $user->user_id . '/edit') . '" class="btn btn-warning btn-sm">Edit</a>';
                $btn .= '<form class="d-inline-block" method="POST" action="' .
                    url('/user/' . $user->user_id) . '">'
                    . csrf_field() . method_field('DELETE') .
                    '<button type="submit" class="btn btn-danger btn-sm" onclick="return
            confirm(\'Apakah Anda yakit menghapus data ini?\');">Hapus</button></form>';
                return $btn;
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }


    public function create()
    {
        $breadcrumb = (object)[
            'title' => 'User',
            'list' => ['Home', 'User', 'Create']
        ];

        $page = (object)[
            'title' => 'Tambah User Baru',
        ];

        $level = LevelModel::all();
        $active_menu = 'user'; //menu yg sedang aktif

        return view('user.create', compact('breadcrumb', 'page', 'level', 'active_menu'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nama' => 'required',
            'level_id' => 'required',
        ]);

        UserModel::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'nama' => $request->nama,
            'level_id' => $request->level_id,
        ]);
        return redirect()->route('user')->with('success', 'User berhasil ditambahkan');
    }


    public function show(string $id)
    {
        $user = UserModel::with('level')->find($id);
        $breadcrumb = (object)[
            'title' => 'User',
            'list' => ['Home', 'User', 'Detail']
        ];

        $page = (object)[
            'title' => 'Detail User',
        ];

        $active_menu = 'user'; //menu yg sedang aktif

        return view('user.show', compact('breadcrumb', 'page', 'user', 'active_menu'));
    }


    public function edit(string $id)
    {
        $user = UserModel::find($id);
        $level = LevelModel::all();
        $breadcrumb = (object)[
            'title' => 'User',
            'list' => ['Home', 'User', 'Edit']
        ];
        $page = (object)[
            'title' => 'Edit User',
        ];
        $active_menu = 'user'; //menu yg sedang aktif
        return view('user.edit', compact('breadcrumb', 'page', 'user', 'level', 'active_menu'));
    }

    public function update(Request $request, string $id)
    {
        //username harus diisi, string, minimal 3 karakter, dan unique di tabel users
        $request->validate([
            'username' => 'required|string|min:3|unique:m_user,username,' . $id . ',user_id',
            'nama' => 'required|string|max:100',
            'password' => 'nullable|min:5',
            'level_id' => 'required|integer',
        ]);

        UserModel::find($id)->update([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => $request->password ? bcrypt($request->password) : UserModel::find($id)->password,
            'level_id' => $request->level_id,
        ]);
        return redirect('/user')->with('success', 'User berhasil diubah');
    }

    public function destroy(string $id)
    {
        $check = UserModel::find($id);
        if(!$check){
            return redirect('/user')->with('error', 'User tidak ditemukan');
        }
        try {
            UserModel::destroy($id);
            return redirect('/user')->with('success', 'User berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/user')->with('error', 'User gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
        }
    }
}
