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
    public function authenticate(Request $request): \Illuminate\Http\JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('email')) {
                if (str_contains($errors->first('email'), 'valid email address')) {
                    return response()->json(['error' => 'Неправильный формат электронной почты'], 422)->setStatusCode(422);
                }
            }
            if ($errors->has('password')) {
                return response()->json(['error' => 'Пароль является обязательным полем'], 422)->setStatusCode(422);
            }
        }

        $credentials = $request->only(['email', 'password']);

        if (!Auth::attempt($credentials)) {
            return response()->json(['error' => 'Неправильный логин или пароль'], 422)->setStatusCode(422);
        }

        return response()->json(['success' => 'Пользователь успешно вошел'], 201);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        return redirect()->intended('/');
    }

    public function registration(Request $request): \Illuminate\Http\JsonResponse
    {
        $validator = Validator::make($request->all(), [
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

        if ($validator->fails()) {
            $error = $validator->errors()->first();
            return response()->json(['error' => $error], 422);
        }

        $user = User::create([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return response()->json(['success' => 'Пользователь успешно зарегистрировался'], 201);
    }
}
