<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;




class DashboardadminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.layout.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

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

    Session::flash('success', 'User updated successfully');
    return redirect()->route('userdashboard.show', $user->id);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
