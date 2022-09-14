<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users/index', compact('users'));
    }

    public function approvalStatus($id)
    {
        try {
            $user = User::find($id);
            $user->is_approved = $user->is_approved ? 0 : 1;
            $user->save();

            return redirect()->route('users.index')->with('success','Success change status user!');
        } catch (\Throwable $th) {
            return redirect()->route('users.index')->with('error','Failed change status user!');
        }
    }

    public function detail($id)
    {
        $user = User::find($id);
        return view('users/detail', compact('user'));
    }
}
