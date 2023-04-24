<?php

namespace App\Http\Controllers\Auth\Mentee;

use App\Http\Controllers\Controller;
use App\Models\Mentee\Mentee;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class MenteeRegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.Mentee.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required','string','max:255'],
            'username' => ['required','string','unique:' . Mentee::class,'min:6','max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . Mentee::class],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        Mentee::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('mentee.login');
    }
}
