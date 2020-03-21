<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function registered() 
    {
        $users = User::all();
        return view('admin.register')->with('users', $users);

    }

    public function registeredit(Request $request, $id)
    {
        $user = User::findOrFail($id);
        return view('admin.register-edit')->with('users', $user);
    }

    public function registerupdate(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('username'); 
        $user->usertype = $request->input('usertype'); 
        $user->update();

        return redirect('/role-register')->with('status', 'User Role has been updated!');    
    }

    public function registerdelete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/role-register')->with('status', 'User Has been deleted!');
    }
}
