@extends('partials.master')

@section('featured')

<header id="featured" class="featured-content fade-background-0 padding-top-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-8 col-xl-7">
                <div class="latest-episode">
                    <div class="podcast-episode">
                        <p class="big text-uppercase opacity-50">Latest Episode</p>
                        <h1 class="entry-title"><a href="single-episode.html">Handling an Insecure Partner</a></h1>
                        <div class="podcast-episode">
                            <div class="podcast-episode-player" data-episode-download="{{URL::asset('podcast-files/Episode 2 - Handling an insecure partner.mp3')}}" data-episode-download-button="Download Episode (831.6 KB)" data-episode-duration="15:50" data-episode-size="831.6 KB">
                                <audio class="wp-audio-shortcode" preload="none" style="width: 100%;" controls="controls">
                                    <source src="http://docs.google.com/uc?export=open&id=17a3pTyxZflULU7NLSbhkTfLBcQJ8ottm" type="audio/mp3" />
                                    {{-- <source src="http://html.liviucerchez.com/common/preview1.ogg" type="audio/ogg" /> --}}
                                </audio>
                            </div>
                        </div>
                        <p>
                            <a href="#" class="button button-filled button-color"><span class="zmdi zmdi-apple"></span> Podcast</a>
                            <a href="#" class="button button-white"><span class="zmdi zmdi-google"></span> Podcast</a>
                            <a href="#" class="button button-white"><span class="zmdi zmdi-rss"></span> RSS Feed</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@endsection


@section('main')

<main id="content" class="padding-top-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="episodes-listing" id="ep-list">
                    <h3 class="add-separator"><span>Browse <em>Episodes</em></span></h3>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="latest-news margin-top-bottom invert-colors fade-background-70 padding-top-bottom">
        <div class="container">
            <h3 class="add-separator"><span>Latest <em>News</em></span></h3>
            <div class="row">
                <div class="col-12 col-md-4">
                    <article class="entry entry-post">
                        <header class="entry-header">
                            <div class="categories">
                                <span class="screen-reader-text">Posted in: </span> <a href="blog.html" rel="category tag">Updates</a>
                            </div>
                            <h2 class="entry-title"><a href="single-post.html" rel="bookmark">Starting fresh one of these days</a></h2>
                            <div class="entry-meta">
                                <span class="posted-on"><span class="screen-reader-text">Posted on: </span><a href="single-post.html">19 October 2017</a></span>
                            </div>
                        </header>
                        <div class="entry-content">
                            <p>Nori grape silver beet broccoli kombu beet greens fava bean potato quandong celery bunya nuts black-eyed pea prairie&hellip;</p>
                            <a href="single-post.html" class="read-more">Read more <span class="zmdi zmdi-trending-flat"></span></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-4">
                    <article class="entry entry-post">
                        <header class="entry-header">
                            <div class="categories">
                                <span class="screen-reader-text">Posted in: </span> <a href="blog.html" rel="category tag">Podcast</a>
                            </div>
                            <h2 class="entry-title"><a href="single-post.html" rel="bookmark">Lessons learned from the big guys</a></h2>
                            <div class="entry-meta">
                                <span class="posted-on"><span class="screen-reader-text">Posted on: </span><a href="single-post.html">13 October 2017</a></span>
                            </div>
                        </header>
                        <div class="entry-content">
                            <p>Sea lettuce lettuce water chestnut eggplant winter purslane fennel azuki bean earthnut pea sierra leone bologi leek&hellip;</p>
                            <a href="single-post.html" class="read-more">Read more <span class="zmdi zmdi-trending-flat"></span></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-4">
                    <article class="entry entry-post">
                        <header class="entry-header">
                            <div class="categories">
                                <span class="screen-reader-text">Posted in: </span> <a href="blog.html" rel="category tag">Interviews</a>
                            </div>
                            <h2 class="entry-title"><a href="single-post.html" rel="bookmark">Yes, let’s start a great project</a></h2>
                            <div class="entry-meta">
                                <span class="posted-on"><span class="screen-reader-text">Posted on: </span><a href="single-post.html">16 September 2017</a></span>
                            </div>
                        </header>
                        <div class="entry-content">
                            <p>Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori grape wattle seed kombu beetroot&hellip;</p>
                            <a href="single-post.html" class="read-more">Read more <span class="zmdi zmdi-trending-flat"></span></a>
                        </div>
                    </article>
                </div>
            </div>
            <div class="pagination pagination-load-more">
                <a href="blog.html" class="button button-white button-filled"><span class="zmdi zmdi-more"></span> Browse More</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="latest-images">
                    <h3 class="add-separator"><span>Latest from <em>Instagram</em></span></h3>
                    <div class="row">
                        <div class="image-item col">
                            <div class="multiply-effect">
                                <a href="#" target="_blank">
                                    <img class="first" src="assets/img/sample-instragram1.jpg" width="300" height="300" alt="">
                                    <span class="second"><img src="assets/img/sample-instragram1.jpg" width="300" height="300" alt=""></span>
                                    <span class="third"><img src="assets/img/sample-instragram1.jpg" width="300" height="300" alt=""></span>
                                </a>
                            </div>
                        </div>
                        <div class="image-item col">
                            <div class="multiply-effect">
                                <a href="#" target="_blank">
                                    <img class="first" src="assets/img/sample-instragram2.jpg" width="300" height="300" alt="">
                                    <span class="second"><img src="assets/img/sample-instragram2.jpg" width="300" height="300" alt=""></span>
                                    <span class="third"><img src="assets/img/sample-instragram2.jpg" width="300" height="300" alt=""></span>
                                </a>
                            </div>
                        </div>
                        <div class="image-item col d-none d-sm-block">
                            <div class="multiply-effect">
                                <a href="#" target="_blank">
                                    <img class="first" src="assets/img/sample-instragram3.jpg" width="300" height="300" alt="">
                                    <span class="second"><img src="assets/img/sample-instragram3.jpg" width="300" height="300" alt=""></span>
                                    <span class="third"><img src="assets/img/sample-instragram3.jpg" width="300" height="300" alt=""></span>
                                </a>
                            </div>
                        </div>
                        <div class="image-item col d-none d-lg-block">
                            <div class="multiply-effect">
                                <a href="#" target="_blank">
                                    <img class="first" src="assets/img/sample-instragram4.jpg" width="300" height="300" alt="">
                                    <span class="second"><img src="assets/img/sample-instragram4.jpg" width="300" height="300" alt=""></span>
                                    <span class="third"><img src="assets/img/sample-instragram4.jpg" width="300" height="300" alt=""></span>
                                </a>
                            </div>
                        </div>
                        <div class="image-item col d-none d-xl-block">
                            <div class="multiply-effect">
                                <a href="#" target="_blank">
                                    <img class="first" src="assets/img/sample-instragram5.jpg" width="300" height="300" alt="">
                                    <span class="second"><img src="assets/img/sample-instragram5.jpg" width="300" height="300" alt=""></span>
                                    <span class="third"><img src="assets/img/sample-instragram5.jpg" width="300" height="300" alt=""></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pagination pagination-load-more">
                        <a href="#" class="button"><span class="zmdi zmdi-instagram"></span> Follow Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection


@section('sales')
<footer class="sales-box padding-top-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <a href="#" class="cover-image">
                    <img src="assets/img/sample-sales-cover.jpg" width="590" height="590" alt="">
                </a>
            </div>
            <div class="col-12 col-md-6">
                <h3>New Stuff Each Week!</h3>
                <p>Listen below and order your copy from Amazon, iTunes or your favorite record store. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseqa untur magni dolores eos qui ratione sequi.</p>
                <p><a href="#" class="button button-small button-white">Amazon</a> <a href="#" class="button button-small button-white">iTunes</a> <a href="#" class="button button-small button-white">Spotify</a></p>
            </div>
        </div>
    </div>
</footer>
@endsection