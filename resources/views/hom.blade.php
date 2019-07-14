@extends('layout.app')

@section('content')
    
    <div class="jumbotron">
        <div class="container">
        <h1>Welcome {{$user}} </h1>
          
          <p>This is a posts blog application.</p>
          <p><a class="btn btn-primary btn-lg" href="/posts" role="button">Posts &raquo;</a></p>
        </div>
      </div>

@endsection