<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $credentials = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if ($credentials) {
            $user = Auth::getLastAttempted();

            if ($user->is_approved) {
                if ($user->is_admin) {
                    return redirect()->route('users.index');
                }
                    
                return redirect()->route('home');
            }

            request()->session()->invalidate();
            return back()->with('error', 'Please wait. Your account has not been approved.');
        }

        return back()->with('error', 'These credentials do not match our records.');
    }

    public function registration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'image' => 'required|max:5120|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $user = new User();
            $user->email = $request->email;
            $user->name = $request->name;
            $user->password = Hash::make($request->password);
        
            $name_image =  $request->file('image')->getClientOriginalName();
            $pathimage = $request->file('image')->move('users', $name_image);
            $user->image = $pathimage;

            $user->save();

            return redirect()->route('login')->with('success', 'Success created account.');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', "There's something wrong");
        }
    }
}
