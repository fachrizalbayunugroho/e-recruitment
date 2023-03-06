<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\FileUploadRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register_action(Request $request)
    {
        $user = new User([
            'name' => $request->name,
            'identity' => $request->identity,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'no_handphone' => $request->no_handphone,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'status' => $request->status
        ]);
        $user->save();

        return redirect()->route('login')->with('success', 'Registration success. Please login!');
    }
    
    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

    public function edit_action(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::where('id', $id)->update([
            'name' => $request->name,
            'identity' => $request->identity,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'no_handphone' => $request->no_handphone,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        return redirect('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}