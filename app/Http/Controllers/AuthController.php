<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'UserPhoto' => 'image',
        ]);
        if ($request->hasFile('UserPhoto')) {
            $photoPath = $request->file('UserPhoto')->store('public/photos');
            $photoPath = str_replace('public/', '', $photoPath); 
        } else {
            $photoPath = 'photos/default.jpg';
        }

        // Создание нового пользователя
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->UserPhoto = $photoPath;
        $user->save();

        return 'Пользователь успешно зарегистрирован!';
    }

    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Аутентификация успешна
            $user = Auth::user();
            session(['user_name' => $user->name]);
            session(['user_photo' => $user->UserPhoto]);

            return redirect()->intended('/dashboard');
        } else {
            // Неудачная аутентификация
            return back()->withInput()->withErrors(['email' => 'Неверный email или пароль']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->forget('user_name');
        $request->session()->forget('user_photo');
        return redirect('/dashboard');
    }
}
