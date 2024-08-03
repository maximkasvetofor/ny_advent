<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use GuzzleHttp\Promise\Create;


class AuthController extends Controller
{

    public function index()
    {

    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Почта или пароль были введены не правильно',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        return redirect()->intended('/');
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function registration(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|max:50',
        ], [

            'email.required' => 'Поле Почта обязательно для заполнения',
            'email.string' => 'Поле Почта должно быть строкой',
            'email.email' => 'Введите корректный адрес электронной почты',
            'email.max' => 'Поле Почта не должно превышать 50 символов',
            'email.unique' => 'Пользователь с таким адресом электронной почты уже существует',
            'password.required' => 'Поле Пароль обязательно для заполнения',
            'password.string' => 'Поле Пароль должно быть строкой',
            'password.max' => 'Поле Пароль не должно превышать 50 символов',
        ]);

        $user = User::create([
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
        ]);


        return redirect('/')->with('success', 'User successfully registered');
    }

}
