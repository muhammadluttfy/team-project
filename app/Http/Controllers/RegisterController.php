<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Registration',
            'active' => 'login'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        // pake cara ini 'username' nya gak masuk db, jadi pake cara kedua
        // STEPS 1
        // $validatedData['password'] = Hash::make($validatedData['password']);
        // User::create($validatedData);

        // STEPS 2
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->email_verified_at = now();
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/login')->with('success', 'Registrasi Successful !! please login');
    }
}
