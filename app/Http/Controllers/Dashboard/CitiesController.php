<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CitiesController extends Controller
{

    public function index()
    {
        $cities=City::all();
        return view('dashboard.cities.index',compact('cities'));
    }


    public function create()
    {
        $countries=Country::all();
        return view('dashboard.cities.create',compact('countries'));
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name'=>'required',
                'country_id'=>'required|exists:countries,id',
            ]
        );
        //dd($request->all());
        $city = City::create($request->all());
        session()->flash('success',__('site.added '.$city->name.' successfully'));
        return redirect()->route('dashboard.cities.index');

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $city=City::find($id);
        $countries=Country::all();
        return view('dashboard.cities.edit',compact('city','countries'));
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name'=>'required',
                'country_id'=>'required|exists:countries,id',
            ]
        );
        $cities =City::find($id);
        $cities->name=$request->input('name');
        $cities->country_id=$request->input('country_id');
        $cities->update();
        session()->flash('success',__('site.updated '.$cities->name.'_successfully'));
        return redirect()->route('dashboard.cities.index');
    }

    public function destroy($id)
    {
        $city=City::find($id);
        $city->delete();
        session()->flash('success',__('site.deleted '.$city->title.'_successfully'));
        return redirect()->route('dashboard.cities.index');
    }
}
