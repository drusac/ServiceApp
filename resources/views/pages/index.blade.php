@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome To Ventex Service Applicationaaaaaaaaaaaaaaaa</h1>
        <p>This is application for service orders built using Laravel PHP Framework @ Ventex d.o.o.</p>
        @guest
            <p>Please login to proceed</p>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @endguest
    </div>
@endsection
