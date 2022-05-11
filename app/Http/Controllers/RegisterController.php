<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        if (User::where('email', $request->email)->count() == 0) {
            $user = new User();
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            if ($user->save()) {
                return back()->with('message', 'Registration Successful!');
            }
        }else{
            return back()->with('error', 'Email Already Exists!');
        }
    }
}
