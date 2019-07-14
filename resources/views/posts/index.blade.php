@extends('layout.app')

@section('content')
    <h1>All posts </h1>
    
    @foreach($posts as $post)
        <div class="well">
            <h2>{{$post->title}}</h2>
            <p>{{$post->body}}</p>
        </div>
    @endforeach
    <a href="/posts/create"><Button class="btn btn-primary">New Post</Button></a>
@endsection