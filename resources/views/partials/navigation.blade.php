<header id="top" class="navbar navbar-sticky">
    <div class="container">
        <div class="row align-items-center">
            <div class="site-title col col-lg-auto order-first">
                <h1>
                    <a href="{{URL::to('/test')}}" class="custom-logo-link" rel="home">
                        <img src="{{URL::asset('img/logo.png')}}" class="custom-logo" width="76" height="18" alt="Castilo">
                    </a>
                </h1>
            </div>
            <nav id="site-menu" class="col-12 col-lg order-3 order-sm-4 order-lg-2">
                <ul>
                    <li class="menu-item"><a href="{{URL::to('/')}}">Dashboard</a></li>
                    <li class="menu-item"><a href="{{URL::to('/episodes')}}">Episodes</a></li>
                    <li class="menu-item"><a href="{{URL::to('/confessions')}}">Confessions</a></li>
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
                <a href="{{URL::to('/auth/logout')}}" class="button button-small"><span class="zmdi zmdi-lock"></span> Logout</a>
            </div>
            <div class="site-menu-toggle col-auto order-2 order-sm-3">
                <a href="#site-menu">
                    <span class="screen-reader-text">Toggle navigation</span>
                </a>
            </div>
        </div>
    </div>
</header>