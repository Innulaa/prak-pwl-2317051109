<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userModel;
    protected $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    // ✅ Tampilkan list user
    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->with('kelas')->get(),
        ];

        return view('list_user', $data);
    }

    // ✅ Tampilkan form tambah user
    public function create()
    {
        $kelas = $this->kelasModel->all(); // ambil semua kelas
        return view('create_user', compact('kelas'));
    }

    // ✅ Simpan data user baru
    public function store(Request $request)
    {
        $this->userModel->create([
            'nama'     => $request->input('nama'),
            'npm'      => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->route('user.index');
    }
}
