<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Form;

class AdminController extends Controller
{
    public function loginpage()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // Validate incoming credentials
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $remember = $request->boolean('remember');

        // Attempt authentication once
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        // Failed authentication: send generic error (avoid exposing which field failed)
        return back()
            ->withErrors([
                'email' => 'Invalid credentials provided.',
            ])
            ->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function admindashboard()
    {
        // Fetch latest entries from posts table (Form model binds to posts)
        $forms = Form::query()->latest()->paginate(25);
        return view('admin.dashboard', compact('forms'));
    }
}
