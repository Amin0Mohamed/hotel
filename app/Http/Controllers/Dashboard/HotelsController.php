<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\City;
use App\Models\Country;
use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelsController extends Controller
{

    public function index()
    {
        $hotels=Hotel::all();
        return view('dashboard.hotels.index',compact('hotels'));
    }


    public function create()
    {
        $counteries  = Country::all();
        return view('dashboard.hotels.create',compact('counteries'));
    }


    public function store(Request $request)
    {
        $this->validate($request,
            [
                'title'=>'required',
                'address'=>'required',
                'description'=>'required',
                'phone'=>'required',
                'name'=>'required',
                'mobile'=>'required',
                'email'=>'required|email',
                'lattitude'=>'required',
                'longitude'=>'required',
                'rating'=>'required',
                'rate_count'=>'required',
                'city_id'=>'required',
            ]
        );
        //dd($request->all());
        $hotels = Hotel::create($request->all());
        session()->flash('success',__('site.added '.$hotels->title.' successfully'));
        return redirect()->route('dashboard.hotels.index');
    }

    public function show($id)
    {

    }


    public function edit($id)
    {
        $hotel=Hotel::find($id);
        $counteries=Country::all();
        return view('dashboard.hotels.edit',compact('hotel','counteries'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'title'=>'required',
                'address'=>'required',
                'description'=>'required',
                'phone'=>'required',
                'name'=>'required',
                'mobile'=>'required',
                'email'=>'required|email',
                'lattitude'=>'required',
                'longitude'=>'required',
                'rating'=>'required',
                'rate_count'=>'required',
                'city_id'=>'required',
            ]
        );

        $hotels =Hotel::find($id);
        $hotels->update($request->all());
        session()->flash('success',__('site.added '.$hotels->title.' successfully'));
        return redirect()->route('dashboard.hotels.index');

    }


    public function destroy($id)
    {
        $hotel=Hotel::find($id);
        $hotel->delete();
        session()->flash('success',__('site.deleted '.$hotel->title.'_successfully'));
        return redirect()->route('dashboard.hotels.index');
    }
}
