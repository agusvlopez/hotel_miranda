<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('welcome', ['rooms' => $rooms]);
    }

    public function rooms()
    {
        $rooms = Room::paginate(6);
        return view('rooms', ['rooms' => $rooms]);
    }

    public function viewRoomDetail(int $id)
    {
        return view('room-detail', [
            'room' =>Room::findOrFail($id),
        ]);
    }
}
