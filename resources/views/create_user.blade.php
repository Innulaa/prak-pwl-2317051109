@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Buat Pengguna Baru</h1>

    {{-- Tampilkan error validasi --}}
    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('user.store') }}" method="POST">
        @csrf

        <div>
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}">
        </div>
        <br>

        <div>
            <label for="npm">NPM:</label><br>
            <input type="text" id="npm" name="npm" value="{{ old('npm') }}">
        </div>
        <br>

        <div>
            <label for="kelas_id">Kelas:</label><br>
            <select name="kelas_id" id="kelas_id">
                <option value="">-- Pilih Kelas --</option>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>
                        {{ $kelasItem->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>
        <br>

        <button type="submit">Submit</button>
    </form>
</div>
@endsection
