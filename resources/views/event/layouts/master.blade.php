<!DOCTYPE html>
<html>
	<head lang="{{ config('app.locale') }}">
		<title>@yield('title')</title>

		@include('event.includes.metastyles')

	</head>
	<body class=" sidebar_hidden side_fixed">
		<div class="wrapper_all">
			@yield('header_top')

			@yield('breadcrumbs')

			@yield('main_content')

			@yield('footer')
		</div>

		@include('event.includes.scripts')
	</body>
</html>