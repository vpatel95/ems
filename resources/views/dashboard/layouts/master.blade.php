<!DOCTYPE html>
<html>
	<head lang="{{ config('app.locale') }}">
		<title>@yield('title')</title>

		@include('common.includes.styles')
		@include('dashboard.includes.metastyles')

		@stack('styles')

	</head>
	<body class=" sidebar_hidden side_fixed">
		<div class="wrapper_all">
			@include('common.includes.header')

			@yield('breadcrumbs')

			@yield('main_content')

			@include('common.includes.footer')
		</div>

		@include('common.includes.scripts')
		@include('dashboard.includes.scripts')

		@stack('scripts')
	</body>
</html>