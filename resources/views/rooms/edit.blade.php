<!-- resources/views/rooms/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Kamar</h1>
        <form action="{{ route('rooms.update', $room->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $room->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea class="form-control" id="description" name="description">{{ $room->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $room->price }}" required>
            </div>
            <div class="form-group">
                <label for="type">Tipe</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="standard" {{ $room->type == 'standard' ? 'selected' : '' }}>Standard</option>
                    <option value="deluxe" {{ $room->type == 'deluxe' ? 'selected' : '' }}>Deluxe</option>
                    <option value="suite" {{ $room->type == 'suite' ? 'selected' : '' }}>Suite</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
