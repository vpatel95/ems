@extends('loginReg.layouts.master')

@section('title', 'Welcome to EMS')

@section('content')
	<div class="login_wrapper">
		<div class="login_panel log_section">
			<div class="login_head">
				<h1>Add Hod</h1>
			</div>
			<form action="{{ route('add.hod.submit') }}" method="POST">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" id="name" name="name" class="form-control input-lg" value="{{ old('name') }}">
				</div>
				<div class="form-group">
					<label for="id">Id</label>
					<input type="number" id="id" name="id" class="form-control input-lg" value="{{ old('id') }}">
				</div>
				<div class="form-group">
					<label for="dept">Department</label>
					<input type="text" id="dept" name="dept" class="form-control input-lg" value="{{ old('dept') }}">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" id="email" name="email" class="form-control input-lg" value="{{ old('email') }}">
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
					<button class="btn btn-primary btn-block btn-lg">Create HOD</button>
					<input type="hidden" name="_token" value="{{ Session::token() }}">
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