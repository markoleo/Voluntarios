@extends('admin.layouts.app')

@section('title')
    Dashboard
@endsection

@section('subtitle')
    Home
@endsection

@section('content')
    <h1>
        <label class="text-center">Hola Bienvenido <span class="name">{{ Auth::user()->name }}</span>

        </label>


    </h1>

@endsection

