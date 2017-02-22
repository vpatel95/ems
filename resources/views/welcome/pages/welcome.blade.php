@extends('welcome.layouts.master')

@section('title', 'Welcome to EMS')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="top-right links">
        <a href="{{ url('/home') }}">Login/Register</a>
    </div>

    <div class="content">
        <div class="title m-b-md">
            Event Management System
        </div>
    </div>
</div>
@endsection
