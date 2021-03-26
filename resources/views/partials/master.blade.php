<!doctype html>
<html lang="en" class="no-js">
<head>
	<title>Rants and Confessions</title>
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

	<style id="castilo-inline-style">
		.featured-content {
			background-color: #313131;
			background-image: url(assets/img/sample-header1-small.jpg);
		}

		@media (min-width: 768px) {
			.featured-content {
				background-image: url(assets/img/sample-header1.jpg);
			}
		}

		.sales-box {
			background-image: url(assets/img/sample-sales.jpg);
		}

		.latest-news {
			background-image: url(assets/img/latest-news.jpg);
		}
	</style>
</head>
<body class="home">
    
    
	<header id="top" class="navbar navbar-sticky">
		<div class="container">
			<div class="row align-items-center">
				<div class="site-title col col-lg-auto order-first">
					<h1>
						<a href="index.html" class="custom-logo-link" rel="home">
							<img src="{{URL::asset('img/logo.png')}}" class="custom-logo" width="76" height="18" alt="Castilo">
						</a>
					</h1>
				</div>
				<nav id="site-menu" class="col-12 col-lg order-3 order-sm-4 order-lg-2">
					<ul>
						<li class="menu-item"><a href="{{URL::to('/about')}}">About</a></li>
						<li class="menu-item"><a href="{{URL::to('/episodes')}}">Episodes</a></li>
						<li class="menu-item"><a href="{{URL::to('/confessions')}}">Confessions</a></li>
						<li class="menu-item"><a href="{{URL::to('/contact')}}">Contact</a></li>
					</ul>
				</nav>
				<nav id="social-links-menu" class="col-12 col-md-auto order-4 order-md-1 order-lg-3">
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
				<div class="call-to-action col-12 col-sm-auto order-5 order-sm-2 order-lg-4">
					<a href="#" class="button button-small" target="_blank"><span class="zmdi zmdi-filter-list"></span> Live now</a>
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
							<form class="mc4wp-form" method="post">
								<div class="mc4wp-form-fields">
									<p>A theme with a simple and organized approach to presenting your content with understated charm and undeniable appeal.</p>
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
									<a title="Facebook Profile" target="_blank" href="http://facebook.com"><span class="screen-reader-text">Facebook</span></a>
								</li>
								<li class="menu-item menu-item-type-custom">
									<a title="Google Play" target="_blank" href="http://play.google.com"><span class="screen-reader-text">Google Play</span></a>
								</li>
								<li class="menu-item menu-item-type-custom">
									<a title="Twitter Profile" target="_blank" href="http://twitter.com"><span class="screen-reader-text">Twitter</span></a>
								</li>
								<li class="menu-item menu-item-type-custom">
									<a title="SoundCloud" target="_blank" href="http://soundcloud.com/podcast"><span class="screen-reader-text">SoundCloud</span></a>
								</li>
								<li class="menu-item menu-item-type-custom">
									<a title="YouTube Channel" target="_blank" href="http://youtube.com"><span class="screen-reader-text">YouTube</span></a>
								</li>
							</ul>
						</nav>
					</section>
				</div>
				<div class="copyright col-12">
					<p>&copy; Castilo with &hearts; in Europe. All Rights Reserved.</p>
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
	<script src="{{URL::asset('js/script.js')}}"></script>
</body>
</html>