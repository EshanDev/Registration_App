<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title', 'Registation Page')</title>

	<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
	@yield('stylesheet')
</head>

<body>
	<div id="app" class="registation">
		<div class="grid-container">
			<header>
				<nav class="navbar navbar-expand-md navbar-dark bg-custom fixed-top shadow-sm">
					<div class="container">
						@if (url()->current() == route('registration'))
						<a href="{{ url('/') }}" class="navbar-brand">{{ config('app.name') }}</a>
						@else
						<a href="{{ route('registration') }}" class="navbar-brand">{{ __('Registration Panel') }}</a>
						@endif
						<div class="navbar-link">
							<ul class="navbar-nav navbar-menu ml-auto">
								@if (url()->current() == route('registration'))
								<li class="nav-item"><a href="{{ route('students.login') }}"
										class="nav-link">{{ __('Login') }}</a></li>
								<li class="nav-item hidden"><a href="{{ route("students.register") }}"
										class="nav-link">{{ __('Register') }}</a></li>
								@elseif (url()->current() == route('students.login'))
								<li class="nav-item"><a href="{{ route("students.register") }}"
										class="nav-link">{{ __('Register') }}</a></li>
								@elseif (url()->current() == route('students.register'))
								<li class="nav-item"><a href="{{ route('students.login') }}"
										class="nav-link">{{ __('Login') }}</a></li>
								@endif
							</ul>
						</div>
					</div>
				</nav>
			</header>
			<main class="main-container">
				<div class="main-content">
					@yield('main-content')
				</div>
				<footer>
					<div class="footer-content">
						&copy; {{ date('Y') }} {{ config('app.name') }} All right reserved.
					</div>
				</footer>
			</main>

		</div>
	</div>


	<script src="{{ mix('js/app.js') }}"></script>
	@yield('script')
</body>

</html>