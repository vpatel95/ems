<!DOCTYPE html>
<html>
	<head lang="{{ config('app.locale') }}">
		<title>@yield('title')</title>

		@include('welcome.includes.metastyles')

	</head>
	<body>
		<main>
			@yield('content')
		</main>
	</body>
</html>