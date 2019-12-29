<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function index()
    {
        $rooms=Room::with('hotel','roomsType')->get();
        return view('dashboard.room.index',compact('rooms'));
    }

    public function create()
    {
        $rooms=Room::all();
        return view('dashboard.room.create',compact('rooms'));
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'room_area'=>'required',
                'bathrooms'=>'required',
                'beds'=>'required',
                'max_adults'=>'required',
                'max_children'=>'required',
                'price'=>'required',
            ]
        );

        $room = new Room();
        $roomadd = Room::create($request->all());

        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.room.index');
    }

    public function edit($id)
    {
        $room=Room::find($id);
        $hotel=Hotel::all();
        return view('dashboard.room.edit',compact('room','hotel'));
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'room_area'=>'required',
                'bathrooms'=>'required',
                'beds'=>'required',
                'max_adults'=>'required',
                'max_children'=>'required',
                'price'=>'required',
            ]
        );

        $change = Room::find($id);
        $change->update($request->all());


        return redirect()->route('dashboard.room.index')->with('success');
    }


    public function destroy($id)
    {
        $rooms=Room::find($id);
        $rooms->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.room.index');
    }
}
