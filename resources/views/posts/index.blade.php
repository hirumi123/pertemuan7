@extends('layouts.main')

@section('content')
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {!! session('success')!!}
</div>
@endif
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-6 mb-3">
            <h1>Postingan</h1>

            </div>
        </div>

        @if(count($posts)>0)
            @foreach ($posts as $post)
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('storage/image/'.$post->picture)}}" style="height: 100px" class="mb-2">
                            <h3><a href="/posts/{{$post -> id}} ">   {{$post -> title}}</a></h3>
                            <p>Dibuat tanggal : {{$post-> created_at}} </p> 
                        </div>
                
                    </div>
                </div>
            </div>
            @endforeach
            Halaman : {{ $posts->currentPage() }}<br />
            Jumlah Data : {{ $posts->total() }} <br />
            Data Per Halaman : {{ $posts->perPage() }} <br />
            <div class="d-flex">
            {{ $posts->links() }}
            </div>
        @else
        <h3>Tidak ada data</h3>
        @endif
        <br>
        @auth
                <a href="{{route ('posts.create') }}" class="btn btn-primary">Create</a>
        @endauth
    </div>

</div>

@endsection 