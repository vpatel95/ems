@extends('loginReg.layouts.master')

@section('title', 'Welcome to EMS')

@section('header')
	<header class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="dashboard.html">Ebro Admin</a>
			</div>
			<div class="pull-right">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#" class="login_toggle">Log In</a></li>
					<li><a href="#" class="register_toggle">Sign Up</a></li>
					<li><a href="#">Help</a></li>
				</ul>
			</div>
		</div>
	</header>
@endsection

@section('content')
	<div class="login_wrapper">
		<div class="login_panel log_section">
			<div class="login_head">
				<h1>Add Admin</h1>
			</div>
			<form action="{{ route('admin.add') }}" method="POST">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" id="name" name="name" class="form-control input-lg">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" id="email" name="email" class="form-control input-lg">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" id="password" name="password" class="form-control input-lg">
				</div>
				<div class="form-group">
					<label for="re_password">Retype Password</label>
					<input type="password" id="re_password" name="re_password" class="form-control input-lg">
				</div>
				<div class="login_submit">
					<button class="btn btn-primary btn-block btn-lg">Add Admin</button>
					<input type="hidden" name="_token" value="{{ Session::token() }}">
				</div>
				<div class="text-center">
					<small>Never mind, <a class="form_toggle" href="#login_form">send me back to the sign-in screen</a></small>
				</div>
			</form>
			@if (count($errors) > 0)
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
		</div>
	</div>
@endsection