@extends('layouts.main')

@section('content')

<div class="container">
        <div class="card">
            <div class="card-body">
                <div class="card-text">
                @guest
                <h2>Silahkan login terlebih dahulu untuk bisa mengakses halaman ini :D</h2>
                <hr class="line">
                @endguest
                @auth
                <img src="{{asset("assets\aizen.jpg")}}" class="align-items-center" alt="">
                
                @endauth
                </div>

            </div>
        </div>
</div>


@endsection