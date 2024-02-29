<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    // Отображение формы для регистрации пользователя
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Обработка запроса на регистрацию пользователя
    public function register(Request $request)
    {
        // Валидация данных
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Создание нового пользователя
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // Автоматическая аутентификация после регистрации (опционально)
        // auth()->login($user);

        // Перенаправление пользователя на домашнюю страницу после успешной регистрации
        return redirect('/');
    }
     // Выход пользователя из системы
     public function logout()
     {
         Auth::logout();
         return redirect('/');
     }
}
