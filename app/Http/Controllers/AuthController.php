<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Возвращает представление формы логина
    }

    public function login(Request $request)
    {
        // Валидация входных данных
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

        return redirect('login')->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('home');
    }

    public function showRegistrationForm()
    {
        return view('auth.register'); // Возвращает представление формы регистрации
    }

    public function register(Request $request)
    {
        // Валидация и регистрация пользователя
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        Auth::login($user);

        return redirect('home');
    }

    public function account()
    {
        return view('auth.account'); // Возвращает представление личного кабинета
    }
}
