@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4 text-center">📚 Daftar Mata Kuliah</h1>

    {{-- Notifikasi sukses --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>✅ Berhasil!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Notifikasi error --}}
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>❌ Gagal!</strong> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Tombol Tambah Mata Kuliah --}}
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('matakuliah.create') }}" class="btn btn-success shadow-sm">
            ➕ Tambah Mata Kuliah
        </a>
    </div>

    {{-- Tabel daftar mata kuliah --}}
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover align-middle text-center">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mks as $mk)
                        <tr>
                            <td>{{ $mk->id }}</td>
                            <td>{{ $mk->nama_mk }}</td>
                            <td>{{ $mk->sks }}</td>
                            <td>
                                {{-- Tombol Edit --}}
                                <a href="{{ route('matakuliah.edit', $mk->id) }}" 
                                   class="btn btn-warning btn-sm me-2 shadow-sm">
                                   ✏️ Edit
                                </a>

                                {{-- Tombol Hapus --}}
                                <form action="{{ route('matakuliah.destroy', $mk->id) }}" 
                                      method="POST" 
                                      class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus mata kuliah ini? 🗑️');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm shadow-sm">
                                        🗑️ Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-muted">Belum ada data mata kuliah.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
