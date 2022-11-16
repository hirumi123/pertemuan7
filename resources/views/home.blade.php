@extends('layouts.main')

@section('content')
<div class="card-body">
@guest
<h1>Halo Selamat Datang</h1>
@endguest
<br>
 @auth
 <h1>Halo <b>{{ Auth::user()->name }}</b>, Selamat Datang di Halaman Utama</h1><br> &nbsp;
 <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
 @endauth
 @guest
 <a class="btn btn-primary" href="{{ route('login') }}">Login</a> <span>  <a class="btn btn-info" href="{{ route('register') }}">Register</a> </span>
 @endguest
</div>


@endsection