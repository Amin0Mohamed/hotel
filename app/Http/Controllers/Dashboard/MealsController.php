<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Hotel;
use App\Models\Meal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MealsController extends Controller
{

    public function index()
    {
        $meals=Meal::all();
        return view('dashboard.meals.index',compact('meals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.meals.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'meal_type'=>'required',
                'price'=>'required',
                'hotel_id'=>'required',
            ]
        );
        $roomadd = Meal::create($request->all());

        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.meals.index');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $meal=Meal::find($id);
        $hotel=Hotel::all();
        return view('dashboard.meals.edit',compact('meal','hotel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'meal_type'=>'required',
                'price'=>'required',
                'hotel_id'=>'required',
            ]
        );
        $roomadd = Meal::find($id);
        $roomadd->update($request->all());
        session()->flash('success',__('site.update_successfully'));
        return redirect()->route('dashboard.meals.index');
    }


    public function destroy($id)
    {
        $meal= Meal::find($id);
        $meal->delete();
        session()->flash('success',__('site.delete_successfully'));
        return redirect()->route('dashboard.meals.index');
    }
}
