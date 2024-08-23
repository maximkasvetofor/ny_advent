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
    <div class="container mt-first-container">
        <h1>День № {{$day}}</h1>
        <h2>{{$name}}</h2>
        <p>{{$longread}}</p>
    </div>
    @include('partials.links')
    @include('partials.footer')
@endsection
