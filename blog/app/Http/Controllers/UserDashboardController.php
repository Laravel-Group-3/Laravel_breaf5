<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('Admin.userdashboard.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('Admin.userdashboard.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('Admin.userdashboard.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->img = $request->input('img');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = $request->input('password');
        $user->save();

        return redirect()->route('userdashboard.show', $user->id)
            ->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('userdashboard.index')
            ->with('success', 'User deleted successfully');
    }
}
