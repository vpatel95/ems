@extends('welcome.layouts.master')

@section('title', 'Welcome to EMS')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="top-right links">
        <a href="{{ route('admin.login') }}">Login</a>
    </div>

    <div class="content">
        <div class="title m-b-md">
            EMS Admin Portal
        </div>
    </div>
</div>
@endsection
