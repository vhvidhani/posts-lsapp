@extends('layout.app')

@section('content')
    <h1>Create Post </h1>
    
    <form action="/posts/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control"><br>
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea type="textarea" name="body" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="cover_img" >Image</label>
        <input type="file" name="cover_img" class="form-control">
    </div>
    <input class="btn btn-primary" type="submit" value="Submit">
    </form>
    
    

    
    
@endsection