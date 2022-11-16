@extends('layouts.main')

@section('content')
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {!! session('success')!!}
</div>
@endif
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1>Postingan</h1>
        @if(count($posts)>0)
            @foreach ($posts as $post)
            <div class="well">
            <img src="{{asset('storage/image/'.$post->picture)}}" style="height: 100px">
                <h3><a href="/posts/{{$post -> id}} " > {{$post -> title}}</a></h3>

                <small>tanggal:{{$post-> created_at}} </small>                
            </div>
            @endforeach
            Halaman : {{ $posts->currentPage() }} <br />
            Jumlah Data : {{ $posts->total() }} <br />
            Data Per Halaman : {{ $posts->perPage() }} <br />
            <div class="d-flex">
            {{ $posts->links() }}
            </div>


        @else
        <h3>Tidak ada data</h3>
        @endif
        </div>
    
    </div>
@auth
    <div class="container">
        <a href="{{route ('posts.create') }}" class="btn btn-primary">Create</a>
    </div>
    
@endauth
@endsection 