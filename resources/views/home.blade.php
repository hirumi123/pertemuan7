@extends('layouts.main')

@section('content')
<h1>Halo, Selamat Datang di Halaman Utama</h1>
<div class="card-body">
 @auth
 <p>Welcome <b>{{ Auth::user()->name }}</b></p>
 <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
 @endauth
 @guest
 <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
 <br>
 <a class="btn btn-info" href="{{ route('register') }}">Register</a>
 @endguest
</div>


@endsection