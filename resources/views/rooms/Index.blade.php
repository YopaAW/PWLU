<!-- resources/views/rooms/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Kamar</h1>
        <a href="{{ route('rooms.create') }}" class="btn btn-primary mb-3">Tambah Kamar Baru</a>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Tipe</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                    <tr>
                        <td>{{ $room->name }}</td>
                        <td>{{ $room->type }}</td>
                        <td>{{ $room->price }}</td>
                        <td>
                            <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kamar ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
