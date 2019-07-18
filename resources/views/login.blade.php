@extends('layout.app')

@section('content')

<form action="/home" method="post">
    @csrf
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" class="form-control">
    </div>
    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>

    
@endsection