<!-- resources/views/rooms/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Kamar</h1>
        <div>
            <p><strong>Nama:</strong> {{ $room->name }}</p>
            <p><strong>Tipe:</strong> {{ $room->type }}</p>
            <p><strong>Harga:</strong> {{ $room->price }}</p>
            <p><strong>Deskripsi:</strong> {{ $room->description }}</p>
        </div>
        <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Kembali ke Daftar Kamar</a>
    </div>
@endsection
