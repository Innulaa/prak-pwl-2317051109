@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4 text-center">Edit Mata Kuliah</h1>

    {{-- Alert sukses atau error --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            ✅ {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            ⚠️ {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Form edit mata kuliah --}}
    <div class="card shadow-sm p-4">
        <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
                <input 
                    type="text" 
                    id="nama_mk" 
                    name="nama_mk" 
                    class="form-control" 
                    value="{{ old('nama_mk', $mk->nama_mk) }}" 
                    required>
            </div>

            <div class="mb-3">
                <label for="sks" class="form-label">SKS</label>
                <input 
                    type="number" 
                    id="sks" 
                    name="sks" 
                    class="form-control" 
                    value="{{ old('sks', $mk->sks) }}" 
                    required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">
                    ← Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                    💾 Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
