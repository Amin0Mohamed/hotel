<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\BloodType;
use App\Models\Client;
use App\Models\Clientable;
use App\Models\Governorate;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{

    public function index()
    {
        $clients=Client::all();
        return view('dashboard.clients.index',compact('clients'));
    }

    public function create()
    {
        $users = User::all();
        return view('dashboard.clients.create',compact('users'));
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'first_name'=>'required',
                'last_name'=>'required',
                'mobile'=>'required',
                'phone'=>'required',
                'dob'=>'required',
                'email'=>'required| email | unique:clients',
                'password'=>'required',
                'hotel_id'=>'required',
            ]
        );
        $client = Client::create($request->all());
        $request->merge(['password'=>bcrypt($request->password)]);
        $client->api_token=str_random(60);
        session()->flash('success',__('site.added '.$client->first_name.' successfully'));
        return redirect()->route('dashboard.clients.index');
    }

    public function edit($id)
    {
        $client=Client::find($id);
        return view('dashboard.clients.edit',compact('client'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'first_name'=>'required',
                'last_name'=>'required',
                'mobile'=>'required',
                'phone'=>'required',
                'dob'=>'required',
                'email'=>'required | email | unique:clients',
                'password'=>'required',
                'hotel_id'=>'required',
            ]
        );
        $client = Client::find($id);
        $client->update($request->all());
        session()->flash('success',__('site.update '.$client->first_name.' successfully'));
        return redirect()->route('dashboard.clients.index')->with('success');
    }


    public function destroy($id)
    {
        $clients=Client::find($id);
        $clients->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.clients.index');
    }

}
