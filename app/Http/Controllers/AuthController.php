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
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $redirectRoute = Auth::user()->is_admin ? 'admin.dashboard' : 'home';
            return response()->json(['redirect' => route($redirectRoute)]);
        }
        return response()->json(['error' => 'Неверные учетные данные'], 422);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
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

        return response()->json(['redirect' => route('home')]);
    }

    public function account()
    {
        return view('auth.account'); // Возвращает представление личного кабинета
    }
}
