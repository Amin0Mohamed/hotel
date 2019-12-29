<?php

namespace App\Http\Controllers\Dashboard;

use \App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users=User::all();
        return view('dashboard.users.index',compact('users'));
    }


    public function create()
    {
        return view('dashboard.users.create');
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
                'image'=>'required|image|mimes:jpeg,jpg,png,gif',
            ]
        );
        $change = new User($request->all());
        if($request->hasFile('image')) {
            $image = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('productimages'), $image);
            $change->image = $image;
        }
        $change->name = $request->input('name');
        $change->email = $request->input('email');
        $change->password =bcrypt($request->input('password'));
        $change->save();
        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.users.index');
    }

    public function edit($id)
    {
        $user=User::find($id);
        return view('dashboard.users.edit',compact('user'));
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
                'image'=>'required|image|mimes:jpeg,jpg,png,gif',

            ]
        );
        $change =User::find($id);
        if($request->hasFile('image')) {
            $image = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('productimages'), $image);
            $change->image = $image;
        }
        $change->name = $request->input('name');
        $change->email = $request->input('email');
        $change->password =bcrypt($request->input('password'));
        $change->update();
        session()->flash('success',__('site.updated_successfully'));
        return redirect()->route('dashboard.users.index');
    }


    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.users.index');
    }
}
