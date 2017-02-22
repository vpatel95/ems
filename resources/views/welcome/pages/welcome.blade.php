@extends('welcome.layouts.master')

@section('title', 'Welcome to EMS')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="#">{{ $user->name }}</a>
                <a href="{{ url('/logout') }}">Logout</a>
            @else
                <a href="{{ url('/home') }}">Login/Register</a>
            @endif
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Event Management System
        </div>
    </div>
</div>
@endsection
