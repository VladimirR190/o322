<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(Request $request){
        return view('register');
    }

    public function login(Request $request){
        return view('login');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        // Создание нового пользователя
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return 'Пользователь успешно зарегистрирован!';
    }

    public function auth(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Аутентификация успешна
            return redirect()->intended('/dashboard');
        } else {
            // Неудачная аутентификация
            return back()->withInput()->withErrors(['email' => 'Неверный email или пароль']);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }
}
