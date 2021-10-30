<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register', [
            'title' => 'Register'
        ]);
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'username' => 'required|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255',
            'con-password' => 'required'
        ]);

        if($validatedData['password'] == $validatedData['con-password']) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            return back()->withInput()->with('registerFailed', 'Password dan konfirmasi password tidak sama');
        }

        User::create($validatedData);

        return redirect('/login')->with('registerSuccess', 'Register berhasil silahkan login');
    }
}
