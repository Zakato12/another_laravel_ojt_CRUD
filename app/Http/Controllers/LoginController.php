<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;


class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $login = $request->input('email');
        $password = $request->input('password');

        $users = DB::table('users')
        ->where('email', $login)
        ->orWhere('name', $login)
        ->first();

        if($users)
        {
            session() -> put('id', $users->id);
            session() -> put('name', $users->name);
            session() -> put('email', $users->email);

            return redirect()->action([PageController::class, 'viewdashboard']);
        }
        else
        {
            return redirect() -> action([LoginController::class, 'showLogin'])->withErrors(['login' => 'Invalid Credentials.']);
        }
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('auth.login')->with('success', 'Registration successful. Please log in.');
    }

    public function logout(Request $request)
    {
        // Flush entire session to clear all session data including login_history etc.
        $request->session()->flush();

        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }
}

