<!doctype html>
<html lang="en" class="no-js">
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="description" content="Feeling the pressure of having to keep everything bottled up? Scared of opening up because you fear to be judged? That is what this podcast is for. Feel free to share your deepest, darkest secrets without revealing your identity">
	<meta name="keywords" content="Rants, Confessions, Lashpixel, Anonymous, Podcast, Ghana">

	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400%7CKarla:400,700" rel="stylesheet">

	<link rel="shortcut icon" href="{{URL::asset('img/favi.png')}}">

	<link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap-reboot.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap-grid.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/material-design-iconic-font.css')}}">

	<link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/stats.css')}}">

	
</head>
<body class="home">
    
    
	@yield('navigation')

    @yield('featured')


    @yield('main')
	


    @yield('sales')
	


    
	<footer id="footer" class="padding-top-bottom">
		<div class="container">
			<div class="row">
				<div class="widget-area col-12">
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