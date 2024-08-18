<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function app()
    {
        /** Return something. */
        return View::make('app', [])->render();
    }

    public function login(Request $request)
    {
        /** Get request method. */
        $method = $request->method();

        /** Check if method is equal to GET. */
        if ($method == 'GET') {
            /** Check and redirect to the dashboard if the user is authenticated. */
            if (Auth::check()) {
                return redirect()->route('dashboard');
            }

            /** Return something. */
            return View::make('auth.login', [])->render();
        }

        /** Check if method is equal to POST. */
        if ($method == 'POST') {

            /** Attempt to authenticate Users. */
            if (!Auth::attempt($request->only('name', 'password'))) {
                return redirect()->back()->withErrors(['error' => 'Login Failed']);
            }

            /** Return something. */
            return redirect('/dashboard')->with(['success' => 'Login Succeed']);
        }
    }

    public function logout(Request $request)
    {

        /** Log the user out. */
        Auth::logout();

        /** Invalidate the session. */
        $request->session()->invalidate();

        /** Regenerate the session token to prevent CSRF attacks. */
        $request->session()->regenerateToken();

        /** Redirect to the login page or any other desired location. */
        return redirect('/login');
    }

    public function dashboard()
    {
        /** Return something. */
        return View::make('pages.dashboard', [])->render();
    }
}
