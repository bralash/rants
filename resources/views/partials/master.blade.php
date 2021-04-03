<!doctype html>
<html lang="en" class="no-js">
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="Rants, Confessions, Lashpixel, Anonymous, Podcast, Ghana">

	@yield('meta')

	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400%7CKarla:400,700" rel="stylesheet">

	<link rel="shortcut icon" href="{{URL::asset('img/favi.png')}}">

	<link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap-reboot.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap-grid.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/material-design-iconic-font.css')}}">

	<link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">

	
</head>
<body class="home">
    
	<style>
		body {
			max-width: 100%;
			overflow-x: hidden;
		}
		textarea {
			resize: none;
		}
	</style>
    
	<header id="top" class="navbar navbar-sticky">
		<div class="container">
			<div class="row align-items-center">
				<div class="site-title col col-lg-auto order-first">
					<h1>
						<a href="{{URL::to('/')}}" class="custom-logo-link" rel="home">
							<img src="{{URL::asset('img/logo.png')}}" class="custom-logo" width="76" height="18" alt="Castilo">
						</a>
					</h1>
				</div>
				<nav id="site-menu" class="col-12 col-lg order-3 order-sm-4 order-lg-2">
					<ul>
						{{-- <li class="menu-item"><a href="{{URL::to('/about')}}">About</a></li> --}}
						<li class="menu-item"><a href="{{URL::to('/episodes')}}">Episodes</a></li>
						{{-- <li class="menu-item"><a href="{{URL::to('/confessions')}}">Confessions</a></li> --}}
						<li class="menu-item"><a href="{{URL::to('/contact')}}">Contact</a></li>
						<li class="menu-item"><a href="{{URL::to('/donate')}}">Donate</a></li>
					</ul>
				</nav>
				<nav id="social-links-menu" class="col-12 col-md-auto order-4 order-md-1 order-lg-3">
					<ul class="social-navigation">
						<li class="menu-item menu-item-type-custom">
							<a title="Facebook" target="_blank" href="https://facebook.com/rantsnconfess"><span class="screen-reader-text">Facebook</span></a>
						</li>
						<li class="menu-item menu-item-type-custom">
							<a title="Instagram" target="_blank" href="https://www.instagram.com/rantsnconfess/"><span class="screen-reader-text">Instagram</span></a>
						</li>
						<li class="menu-item menu-item-type-custom">
							<a title="Twitter" target="_blank" href="https://twitter.com/RantsNConfess"><span class="screen-reader-text">Twitter</span></a>
						</li>
						<li class="menu-item menu-item-type-custom">
							<a title="YouTube" target="_blank" href="https://www.youtube.com/channel/UCvTf0K_R-OMoswl-aDQn4nQ"><span class="screen-reader-text">YouTube</span></a>
						</li>
					</ul>
				</nav>
				<div class="call-to-action col-12 col-sm-auto order-5 order-sm-2 order-lg-4">
					<a href="{{URL::to('/confess')}}" class="button button-small"><span class="zmdi zmdi-edit"></span> Confess</a>
				</div>
				<div class="site-menu-toggle col-auto order-2 order-sm-3">
					<a href="#site-menu">
						<span class="screen-reader-text">Toggle navigation</span>
					</a>
				</div>
			</div>
		</div>
	</header>

    @yield('featured')


    @yield('main')
	


    @yield('sales')
	


    
	<footer id="footer" class="padding-top-bottom">
		<div class="container">
			<div class="row">
				<div class="widget-area col-12">
					<section class="widget widget_text">
						<h3 class="widget-title">Don't miss our weekly episodes. Subscribe now!</h3>
						<div class="textwidget">
							<form class="mc4wp-form" action="{{URL::to('/mailing-list')}}" method="post">
								{{ csrf_field() }}
								<div class="mc4wp-form-fields">
									<p>Be ahead of everyone else. Get notified whenever we post a new episode. Be the first to listen &hearts;</p>
									<p class="one-line">
										<label class="screen-reader-text" for="subscribe_email">Subscription Email</label><input id="subscribe_email" name="email" required="" placeholder="Your email address&hellip;" type="email"><input value="Subscribe" type="submit" class="button-color button-filled">
									</p>
								</div>
							</form>
						</div>
					</section>
					<section class="widget widget_nav">
						<h3 class="screen-reader-text">Social Navigation</h3>
						<nav>
							<ul class="social-navigation">
								<li class="menu-item menu-item-type-custom">
									<a title="Facebook" target="_blank" href="https://facebook.com/rantsnconfess"><span class="screen-reader-text">Facebook</span></a>
								</li>
								<li class="menu-item menu-item-type-custom">
									<a title="Instagram" target="_blank" href="https://www.instagram.com/rantsnconfess/"><span class="screen-reader-text">Google Play</span></a>
								</li>
								<li class="menu-item menu-item-type-custom">
									<a title="Twitter" target="_blank" href="https://twitter.com/RantsNConfess"><span class="screen-reader-text">Twitter</span></a>
								</li>
								<li class="menu-item menu-item-type-custom">
									<a title="YouTube" target="_blank" href="https://www.youtube.com/channel/UCvTf0K_R-OMoswl-aDQn4nQ"><span class="screen-reader-text">YouTube</span></a>
								</li>
							</ul>
						</nav>
					</section>
				</div>
				<div class="copyright col-12">
					<p>&copy; Built with &hearts; by <a href="https://instagram.com/lashpixel" title="Emmanuel Asaber" target="_blank">Lashpixel</a>. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</footer>

	<script src="{{URL::asset('assets/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/modernizr-custom.js')}}"></script>
	<script src="{{URL::asset('assets/js/functions.js')}}"></script>

	<!-- MediaElement.js files -->
	<link rel="stylesheet" id="mediaelement-css"  href="{{URL::asset('assets/mediaelement/mediaelementplayer-legacy.css')}}">
	<link rel="stylesheet" id="wp-mediaelement-css"  href="{{URL::asset('assets/mediaelement/wp-mediaelement.css')}}">
	<link rel="stylesheet" id="castilo-additional-mediaelement-css"  href="{{URL::asset('assets/css/mediaelement-castilo.css')}}">
	<script src="{{URL::asset('assets/mediaelement/mediaelement-and-player.js')}}"></script>
	<script src="{{URL::asset('assets/mediaelement/mediaelement-migrate.js')}}"></script>
	<script src="{{URL::asset('assets/mediaelement/wp-mediaelement.js')}}"></script>
	<script src="{{URL::asset('assets/js/mediaelement-castilo.js')}}"></script>
	<script src="{{URL::asset('js/moment.min.js')}}"></script>
	<script src="{{URL::asset('js/script.js')}}"></script>
</body>
</html>