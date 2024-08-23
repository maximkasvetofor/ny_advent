@extends('layout.app')

@section('title', 'Лонгрид')

@section('css')
    <link rel="stylesheet" href={{ asset('bootstrap/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('fonts/fonts.css') }}>
    <link rel="stylesheet" href={{ asset('css/main.css') }}>
    <link rel="stylesheet" href={{ asset('css/modal.css') }}>
    <link rel="stylesheet" href={{ asset('css/anim.css') }}>

@endsection

@section('content')
    @include('partials.header')
    <main>
        <div class="cotnent">
            <div class="container">
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('index') }}">Главная</a></li>
                    <li>День № {{$day}}</li>
                </ul>
            </div>

                <style>
                    .page-breadcrumb{
                        margin-top:120px
                    }
                    .page-breadcrumb{
                    /*padding: 15px 15px;*/
                        padding-bottom: 15px;
                        list-style: none;
                        li {
                            display: inline;
                            font-size: 14px;
                            a {
                                color: var(--header-btn-color);
                                text-decoration: none;
                            }
                        }
                        li+li:before {
                            padding: 8px;
                            color: black;
                            content: "/\00a0";
                        }
                    }
                </style>
                <div class="container mt-first-container">
                    <h2>День № {{$day}}</h1>
                        <h3>{{$name}}</h2>
                        <p>{{$longread}}</p>
                </div>
            <</div>
            @include('partials.links')
            @include('partials.footer')

        </div>
    </main>

    <div class="modal-wrapper inactive">
        @include('modalWindow.subs')
        <!-- Регистрация -->
        @include('modalWindow.registration')
        <!-- Вход -->
        @include('modalWindow.login')
        <!-- Подарок -->
        @include('modalWindow.podarok')
    </div>
@endsection
