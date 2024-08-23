@extends('layout.app')

@section('title', 'Новогодний Адвент')

@section('css')
    <link rel="stylesheet" href={{ asset('bootstrap/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('fonts/fonts.css') }}>
    <link rel="stylesheet" href={{ asset('css/main.css') }}>
    <link rel="stylesheet" href={{ asset('css/modal.css') }}>
    <link rel="stylesheet" href={{ asset('css/anim.css') }}>

@endsection

@section('content')
    @include('advent')
@endsection
