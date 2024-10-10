<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function form()
    {
        return view('auth.form');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // $token = $request->user()->createToken('authToken')->plainTextToken;
            return view('welcome', ['users' => User::find($user->id), 'videos' => Video::all()->sortByDesc('created_at')]);
        } else {
            dd('Login failed');
        }
    }

    public function signup(Request $request) {
        $data = $request->all();
        if($data['password'] === $data['password-confirm']) {
            if(User::create($data)) {
                return redirect('/login');
            } else {
                dd('Erro ao cadastrar usuário');
            }
        }
    }
}
