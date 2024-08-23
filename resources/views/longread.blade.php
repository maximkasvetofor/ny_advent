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

    <main>
        @include('partials.header')
        <div class="cotnent">
                <div class="container">
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('index') }}">Главная</a></li>
                        <li></li>
                    </ul>
                    <h2>День № {{$day}}</h1>
                        <h3>{{$name}}</h2>
                        <p>{!! nl2br($longread) !!}</p>
                </div>
            <div class="container">
                @if($image == '')
                @else
                        @if(explode('.', $image)[2] == 'mp4')
                        <video src="{{$image}}" alt="" width="100%" controls></video>
                        @else
                                    <img src="{{$image}}" alt="" width="100%">
                        @endif
                @endif
            </div>
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
