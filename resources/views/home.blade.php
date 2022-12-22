@extends('layouts.main')

@section('content')
<div class="container">
        <div class="card">
            <div class="card-body">
                <div class="card-text">
                @guest
                <h1>Halo Selamat Datang</h1>
                @endguest
                @auth
                <h2>Halo <b>{{ Auth::user()->name }}</b>, Selamat Datang di Halaman Utama</h2>
                <hr class="line">
                <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
                
                @endauth
                
                </div>
                @guest
                <hr class="line">
                <a class="btn btn-primary" href="{{ route('login') }}">Login</a> <span>  <a class="btn btn-info" href="{{ route('register') }}">Register</a> </span>
                @endguest
            </div>
        </div>
    </div>

@endsection