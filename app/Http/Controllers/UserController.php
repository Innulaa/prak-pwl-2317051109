<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\Kelas;

class UserController extends Controller
{
    /**
     * Menampilkan semua user
     */
    public function index()
    {
        // Ambil semua data user + relasi kelas
        $users = UserModel::with('kelas')->get();
        $title = "Daftar Pengguna";

        return view('user.index', compact('users', 'title'));
    }

    /**
     * Form tambah user
     */
    public function create()
    {
        // Ambil semua data kelas untuk dropdown
        $kelas = Kelas::all();
        $title = "Tambah Pengguna";

        return view('user.create_user', compact('kelas', 'title'));
    }

    /**
     * Simpan user baru
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama'     => 'required|string|max:100',
            'npm'      => 'required|string|max:20|unique:users,npm',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        // Simpan ke database
        UserModel::create([
            'nama'     => $request->nama,
            'npm'      => $request->npm,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()
            ->route('user.index')
            ->with('success', 'Pengguna berhasil ditambahkan!');
    }

    /**
     * Form edit user
     */
    public function edit($id)
    {
        $user  = UserModel::findOrFail($id);
        $kelas = Kelas::all();
        $title = "Edit Pengguna";

        return view('user.edit_user', compact('user', 'kelas', 'title'));
    }

    /**
     * Update data user
     */
    public function update(Request $request, $id)
    {
        $user = UserModel::findOrFail($id);

        $request->validate([
            'nama'     => 'required|string|max:100',
            'npm'      => 'required|string|max:20|unique:users,npm,' . $user->id,
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $user->update([
            'nama'     => $request->nama,
            'npm'      => $request->npm,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()
            ->route('user.index')
            ->with('success', 'Pengguna berhasil diperbarui!');
    }

    /**
     * Hapus user
     */
    public function destroy($id)
    {
        $user = UserModel::findOrFail($id);
        $user->delete();

        return redirect()
            ->route('user.index')
            ->with('success', 'Pengguna berhasil dihapus!');
    }
}
