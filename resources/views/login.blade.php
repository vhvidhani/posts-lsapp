@extends('layout.app')

@section('content')

<form action="/home" method="get">
    @csrf
    <div class="form-group">
    <label for="username"></label>
    <input type="text" name="username" class="form-control">
    </div>
    <div class="form-group">
    <label for="password"></label>
    <input type="password" name="password" class="form-control">
    </div>
    <button type="submit">Login</button>
</form>

    
@endsection