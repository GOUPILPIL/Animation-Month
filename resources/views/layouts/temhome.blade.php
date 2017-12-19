<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Calendrier de l'avent</title>
		<!-- Bootstrap core CSS -->
		<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">
		<!-- Custom fonts for this template -->
		<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<!-- Plugin CSS -->
		<link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="{{ asset('css/creative.min.css') }}" rel="stylesheet">
	</head>
	<body id="page-top">
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
			<div class="container">
				<a class="navbar-brand js-scroll-trigger" href="#page-top">Calendrier de l'avent</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						@guest
							<li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('register') }}">S'inscrire</a></li>
							<li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Se connecter</a></li>
						@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">{{ Auth::user()->name }} <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li>
										<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se déconnecter</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
										</form>
									</li>
								</ul>
							</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav>
		<header class="masthead text-center text-white d-flex">
			<div class="container my-auto">
				<div class="row">
					<!-- Mettre ici les jours du mois -->
					@yield('day')
				</div>
			</div>
		</header>
		<!-- Modal -->
		@yield('modal')
		<!-- Bootstrap core JavaScript -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
		<!-- Plugin JavaScript -->
		<script src="{{ asset('js/creative.min.js') }}"></script>
		<script src="{{ asset('js/scrollreveal.min.js') }}"></script>
		<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
		<!-- Custom scripts for this template -->
		<script src="{{ asset('js/creative.min.js') }}"></script>
	</body>
</html>