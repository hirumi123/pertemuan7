@extends('layouts.main')

@section('content')

<style type="text/css">
    .pagination li {
        float : left;
        list-style-type : none;
        margin : 5px;
    }
</style>
    <div class="container">
        <div class="col sm-6">
            <h1 class="text-center">Gallery</h1>
        </div>
    </div>


<div class="content mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h4 class="card-title"{{$menu}}></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @if(count($galleries)>0)
                            @foreach ($galleries as $gallery)
                            <div class="col sm-2">
                                <div>
                                    <a class="example-image-link" href="{{asset('storage/image/' .$gallery->picture)}}"
                                    data-lightbox="example-2" data-title="{{$gallery->description}}">
                                    <img class="example-image img-fluid mb-2"
                                    src = "{{asset('storage/image/' .$gallery->picture)}}" alt="gambar">
                                    </a>
                                    
                                </div>
                            </div>
                            @endforeach
                            @else
                            <h3>Tidak ada data</h3>
                            @endif
                            <div class="d-flex">
                                {{ $galleries->links() }}
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection