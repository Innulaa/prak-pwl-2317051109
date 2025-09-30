@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
    <div class="card">
        <img src="{{ asset('images/intan.jpeg') }}" alt="Foto Profil">
        <div class="info">{{ $nama }}</div>
        <div class="info">{{ $kelas }}</div>
        <div class="info">{{ $npm }}</div>
    </div>
@endsection
