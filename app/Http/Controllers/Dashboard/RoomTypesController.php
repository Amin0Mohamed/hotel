<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomTypesController extends Controller
{

    public function index()
    {
        $rooms=RoomType::all();
        return view('dashboard.room_types.index',compact('rooms'));
    }

    public function create()
    {
        return view('dashboard.room_types.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'type_name'=>'required',
                'description'=>'required',
            ]
        );

        $roomadd = RoomType::create($request->all());

        session()->flash('success',__('site.added '.$roomadd->type_name.' successfully'));
        return redirect()->route('dashboard.room_types.index');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $room=RoomType::find($id);
        return view('dashboard.room_types.edit',compact('room'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'type_name'=>'required',
                'description'=>'required',
            ]
        );

        $roomadd = RoomType::find($id);
        $roomadd->update($request->all());
        session()->flash('success',__('site.update '.$roomadd->type_name.' successfully'));
        return redirect()->route('dashboard.room_types.index');
    }

    public function destroy($id)
    {
        $roomadd = RoomType::find($id);
        $roomadd->delete();

        session()->flash('success',__('site.deleted '.$roomadd->type_name.' successfully'));
        return redirect()->route('dashboard.room_types.index');
    }
}
