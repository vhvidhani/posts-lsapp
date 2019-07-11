@extends('layout.app')

@section('content')
    <h1>All posts </h1>
    
    @foreach($posts as $post)
        <div class="Well"><h2>{{$post}}</h2></div>
    @endforeach
    
@endsection