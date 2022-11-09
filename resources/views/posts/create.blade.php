@extends('layouts.main')
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1>Add Blog Post</h1>
        <form action="{{ route('posts.store') }}" enctype="multipart/form-data" method="POST">
            {{ csrf_field() }}            
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailhelp" name="title">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="5"></textarea>
            </div>
            <div class="form-group">
            <label for="input-file">File Input</label>
            <div class="input-group">
                <div class="custom-file border border-secondary rounded">
                    <input type="file" class="custom-file-input" id="input-file" name="picture">
                    <label class="custom-file-label" for="input-file">Choose File</label>
                </div>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
    
@endsection