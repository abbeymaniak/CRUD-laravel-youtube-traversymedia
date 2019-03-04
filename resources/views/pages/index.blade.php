@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is Laravel application from "Laravel from scrath" Youtube Series</p>
        <p class="btn btn-primary btn-lg" href="/login" role="button">Login</p>
        <p class="btn btn-success btn-lg" href="/register" role="button">Register</p>
    </div>

@endsection
    

