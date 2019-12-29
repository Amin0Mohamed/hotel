<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Hotel;
use App\Models\Meal;
use App\Models\Season;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeasonsController extends Controller
{

    public function index()
    {
        $seasons=Season::all();
        return view('dashboard.seasons.index',compact('seasons'));
    }


    public function create()
    {
        return view('dashboard.seasons.create');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'season_type'=>'required',
                'season_price'=>'required',
                'hotel_id'=>'required',
            ]
        );
        $seasons = Season::create($request->all());

        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.seasons.index');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $season=Season::find($id);
        $hotel=Hotel::all();
        return view('dashboard.seasons.edit',compact('season','hotel'));
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'season_type'=>'required',
                'season_price'=>'required',
                'hotel_id'=>'required',
            ]
        );
        $seasons =Season::find($id);
        $seasons->update($request->all());

        session()->flash('success',__('site.update_successfully'));
        return redirect()->route('dashboard.seasons.index');
    }


    public function destroy($id)
    {
        $seasons =Season::find($id);
        $seasons->delete($id);
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.seasons.index');
    }
}
