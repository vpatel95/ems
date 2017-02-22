<!DOCTYPE html>
<html>
	<head lang="{{ config('app.locale') }}">
		<title>@yield('title')</title>

		@include('dashboard.includes.metastyles')

	</head>
	<body class=" sidebar_hidden side_fixed">
		<div class="wrapper_all">
			@yield('header_top')

			@yield('breadcrumbs')

			@yield('main_content')

			@yield('footer')
		</div>

		@include('dashboard.includes.scripts')
	</body>
</html>