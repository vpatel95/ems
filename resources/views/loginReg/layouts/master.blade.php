<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>

		@include('loginReg.includes.metastyles')

	</head>
	<body>
		<main>
			@yield('content')
		</main>

		@include('loginReg.includes.scripts')
	</body>
</html>