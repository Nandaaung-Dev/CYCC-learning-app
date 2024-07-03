<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\error;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            toastr()->success('Successfully Login');
            return back();
        }

        toastr()->error('Invalid credentials!');
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        toastr()->success('Successfully Logout!');

        return redirect('/'); // Redirect to wherever you want after logout
    }

    public function profile()
    {
        dd(auth()->user());
    }
}
