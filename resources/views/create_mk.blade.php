@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Buat Mata Kuliah Baru</h1>

    {{-- Form tambah mata kuliah --}}
    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
            <input type="text" id="nama_mk" name="nama_mk" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="sks" class="form-label">SKS</label>
            <input type="number" id="sks" name="sks" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
