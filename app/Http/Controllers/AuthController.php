<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {

    }
    public function authenticate(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if (!Auth::attempt($request->only(['email', 'password']))) {
            return back()->withErrors(['auth' => 'Неправильный логин или пароль'])->withInput();
        }

        return redirect()->intended(route('home'));
    }

    public function registration(Request $request): \Illuminate\Http\JsonResponse
    {
        $validatedData = $request->validate([
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|max:50',
            'password-confirm' => 'required|string|max:50|same:password',
        ], [
            'email.required' => 'Поле Почта обязательно для заполнения',
            'email.string' => 'Поле Почта должно быть строкой',
            'email.email' => 'Введите корректный адрес электронной почты',
            'email.max' => 'Поле Почта не должно превышать 50 символов',
            'email.unique' => 'Пользователь с таким адресом электронной почты уже существует',
            'password.required' => 'Поле Пароль обязательно для заполнения',
            'password.string' => 'Поле Пароль должно быть строкой',
            'password.max' => 'Поле Пароль не должно превышать 50 символов',
            'password-confirm.required' => 'Поле Повторите пароль обязательно для заполнения',
            'password-confirm.string' => 'Поле Повторите пароль должно быть строкой',
            'password-confirm.max' => 'Поле Повторите пароль не должно превышать 50 символов',
            'password-confirm.same' => 'Пароли не совпадают',
        ]);

        try {
            $user = User::create([
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
            ]);

            return response()->json(['success' => 'User successfully registered'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Registration failed'], 422);
        }
    }
}
