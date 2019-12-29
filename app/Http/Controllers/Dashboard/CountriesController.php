<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountriesController extends Controller
{
    public function index()
    {
        $countries=Country::all();
        return view('dashboard.countries.index',compact('countries'));
    }

    public function create()
    {
        return view('dashboard.countries.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name'=>'required',
            ]
        );

        $countries = Country::create($request->all());
        session()->flash('success',__('site.added '.$countries->name.' successfully'));
        return redirect()->route('dashboard.countries.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $country=Country::find($id);
        return view('dashboard.countries.edit',compact('country'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'name'=>'required',
            ]
        );
        $country = Country::find($id);
        $country->name = $request->name;
        $country->update();
        session()->flash('success',__('site.updated '.$country->name.' successfully'));
        return redirect()->route('dashboard.countries.index');
    }


    public function destroy($id)
    {
        dd($id);
        $country = Country::find($id);
        $country->delete();
        session()->flash('success',__('site.deleted '.$country->name.' successfully'));

    }
}
