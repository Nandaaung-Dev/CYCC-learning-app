<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);


        // Check if validation fails
        if ($validator->fails()) {
            // Display error messages using Toastr
            foreach ($validator->errors()->all() as $error) {
                toastr()->error($error);
            }

            // Redirect back with input and error messages
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log the user in after registration
        auth()->login($user);

        toastr()->success('Registration successful!');

        return redirect('/');
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
