<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    /**
     * Menampilkan daftar semua kamar.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    /**
     * Menampilkan form untuk menambahkan kamar baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Menyimpan kamar baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|integer|min:0',
            'type' => 'required|in:standard,deluxe,suite',
        ]);

        $room = new Room();
        $room->name = $request->name;
        $room->description = $request->description;
        $room->price = $request->price;
        $room->type = $request->type;
        $room->save();

        return redirect()->route('rooms.index')->with('success', 'Room created successfully.');
    }

    /**
     * Menampilkan detail kamar.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('rooms.show', compact('room'));
    }

    /**
     * Menampilkan form untuk mengedit kamar.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    /**
     * Update kamar yang ada di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|integer|min:0',
            'type' => 'required|in:standard,deluxe,suite',
        ]);

        $room->name = $request->name;
        $room->description = $request->description;
        $room->price = $request->price;
        $room->type = $request->type;
        $room->save();

        return redirect()->route('rooms.index')->with('success', 'Room updated successfully.');
    }

    /**
     * Menghapus kamar dari database.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully.');
    }
}

