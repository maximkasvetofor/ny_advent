@extends('layout.app')

@section('title', 'Профиль')

@section('css')
    <link rel="stylesheet" href={{ asset('bootstrap/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('fonts/fonts.css') }}>
    <link rel="stylesheet" href={{ asset('css/main.css') }}>
    <link rel="stylesheet" href={{ asset('css/modal.css') }}>
    <link rel="stylesheet" href={{ asset('css/admin.css') }}>
@endsection

@section('content')
    <main>
    @include('partials.header')
        @if(Auth::check())
            <div class="container">
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('index') }}">Главная</a></li>
                    <li></li>
                </ul>
            </div>
    <div class="container">
        <h3>
            Профиль
        </h3>
        <div class="row-item">
            <img src="{{asset("images/profile_pic.jpg")}}" alt="Фотография профиля" class="wh-200">
            <form class="admin-form">
                <!-- <p class="font-medium">Почта</p>
                <span class="font-regular">kekkekchebutek12@mail.ru</span> -->
                <p class="font-medium">Изменить пароль</p>
                <div class="admin-form-item">
                    <div class="admin-input">
                        <label for="mail">Новый пароль</label>
                        <input type="text" name="email" required="required">
                    </div>
                    <div class="admin-input">
                        <label for="mail">Старый пароль</label>
                        <input type="text" name="email" required="required">
                    </div>
                </div>
                <button class="regular-btn">Изменить</button>
                <!-- <p class="font-medium">Изменить фотографию профиля</p>
                <input type="file"> -->

            </form>
        </div>
    </div>
@else
<h1>Нет доступа!</h1>
@endif

@endsection
