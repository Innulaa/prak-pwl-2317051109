@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Mata Kuliah</h1>

    {{-- Tombol Tambah Mata Kuliah --}}
    <a href="{{ route('matakuliah.create') }}" class="btn btn-success mb-3">
        Tambah Mata Kuliah Baru
    </a>

    {{-- Tabel daftar mata kuliah --}}
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mks as $mk)
                <tr>
                    <td>{{ $mk->id }}</td>
                    <td>{{ $mk->nama_mk }}</td>
                    <td>{{ $mk->sks }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
