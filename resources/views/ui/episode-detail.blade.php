@extends('partials.master')
@section('title',$episode->title)
@section('meta')
    @include('partials.episode-detail')
@endsection

<style id="castilo-inline-style">
    .featured-content {
        background-color: #313131;
        background-image: url(../assets/img/sample-header-small.jpg);
    }

    @media (min-width: 768px) {
        .featured-content {
            background-image: url(../assets/img/sample-header.jpg);
        }
    }

    .sales-box {
        background-image: url(assets/img/sample-sales.jpg);
    }

    .latest-news {
        background-image: url(assets/img/latest-news.jpg);
    }
</style>

@section('featured')
    <div class="single-episode">
        <header id="featured" class="featured-content fade-background-50 padding-top-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-8 col-xl-7">
                        <div class="categories">
                            <span class="screen-reader-text">Posted in: </span> <a href="{{URL::to('/season')}}/{{$episode->season}}" rel="category tag">Season {{$episode->season}}</a>
                        </div>
                        <h1 class="entry-title">{{$episode->title}}</h1>
                        <div class="entry-meta">
                            <span class="posted-on"><span class="screen-reader-text">Posted on: </span> <a><time class="entry-date published">{{$episode->posted_on}}</time></a></span> <span class="tags"><span class="screen-reader-text">Tagged: </span> Episode {{$episode->episode}}</span>
                        </div>
                        <div class="podcast-episode">
                            <div class="podcast-episode">
                                <div class="podcast-episode-player" data-episode-download="{{$episode->audio_url}}" data-episode-download-button="Download Episode" data-episode-duration="00:00" data-episode-size="">
                                    <audio class="wp-audio-shortcode" preload="none" style="width: 100%;" controls="controls">
                                        <source src="{{$episode->audio_url}}" type="audio/mpeg" />
                                        {{-- <source src="http://html.liviucerchez.com/common/preview1.ogg" type="audio/ogg" /> --}}
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
@endsection

@section('main')
<main id="content" class="has-sidebar padding-top-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-9">
                <article class="entry entry-episode">
                    <div class="entry-content">
                        <p>
                            {!! $episode->description !!}
                        </p>
                    </div>
                    <div class="entry-footer">
                        {{-- <aside class="share-entry">
                            <h5 class="share-title">Share episode:</h5>
                            <p class="share-links">
                                <a title="Facebook" target="_blank" href="#"><span class="zmdi zmdi-facebook"></span> <span class="screen-reader-text">Facebook</span></a>
                                <a title="Google+" target="_blank" href="#"><span class="zmdi zmdi-google-plus"></span> <span class="screen-reader-text">Google+</span></a>
                                <a title="Twitter" target="_blank" href="#"><span class="zmdi zmdi-twitter"></span> <span class="screen-reader-text">Twitter</span></a>
                                <a title="Pinterest" target="_blank" href="#"><span class="zmdi zmdi-pinterest"></span> <span class="screen-reader-text">Pinterest</span></a>
                            </p>
                        </aside> --}}
                        <aside class="author-box has-description clearfix">
                            <div class="row align-items-lg-center">
                                <figure class="col-4 col-md-3 col-xl-2 author-box-image">
                                    <img alt="" src="{{URL::asset('img/profile.jpg')}}" class="avatar photo" width="150" height="150">
                                </figure>
                                <div class="col-8 col-md-9 col-xl-10">
                                    <h5 class="author-box-title">Published by <a href="https://instagram.com/lashpixel" title="Visit my instagram page" rel="author external">Lashpixel</a></h5>
                                    <div class="author-box-description">Hey I’m Lash, a freelance Web Developer, Photographer and Podcaster. You can find me on <a href="https://instagram.com/lashpixel">Instagram</a>.
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside class="post-controls">
                            <div class="row">
                                @if ($previous)
                                    <div class="prev-post col-12 col-lg-6 col-xl-5">
                                        <a href="{{URL::to('episode')}}/{{$previous->slug}}" rel="prev"><span class="zmdi zmdi-long-arrow-left"></span> Prev</a>
                                        <h5><a href="{{URL::to('episode')}}/{{$previous->slug}}">{{$previous->title}}</a></h5>
                                    </div>
                                @endif
                                
                                @if ($next)
                                    <div class="next-post col-12 col-lg-6 col-xl-5 offset-xl-2">
                                        <a href="{{URL::to('episode')}}/{{$next->slug}}" rel="next">Next <span class="zmdi zmdi-long-arrow-right"></span></a>
                                        <h5><a href="{{URL::to('episode')}}/{{$next->slug}}">{{$next->title}}</a></h5>
                                    </div>
                                @endif
                                
                            </div>
                        </aside>
                    </div>
                </article>
            </div>
            <div id="sidebar" class="col-12 col-md-4 col-lg-3">
                <div class="widget widget_categories">
                    <h5 class="add-separator"><span>Categories</span></h5>
                    <ul>
                        <li class="cat-item current-cat"><a href="#">Podcast</a>
                            <ul class="children">
                                @foreach ($seasons as $season)
                                    <li class="cat-item"><a href="#">Season {{$season->season}}</a></li>
                                @endforeach
                                
                            </ul>
                        </li>
                        <li class="cat-item"><a href="#">Segment</a>
                            <ul class="children">
                                @foreach ($segments as $segment)
                                    <li class="cat-item"><a href="">{{$segment->title}}</a></li>
                                @endforeach
                                
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="widget widget_text widget_custom_html highlight">
                    <div class="textwidget custom-html-widget">
                        <h5 class="add-separator"><span>Subscribe now!</span></h5>
                        <img src="{{URL::asset('img/clear-logo.png')}}" alt="subscribe-itunes" style="display:block;margin:0.5em auto 1em;" width="108" height="108">
                        <p class="no-margin-bottom">
                            <a href="https://podcasts.apple.com/gh/podcast/rants-and-confessions/id1536307081" class="button underline" target="_blank">
                                <span class="zmdi zmdi-apple"></span> Podcasts
                            </a> 
                            <a href="https://open.spotify.com/show/5xP3LJgQnNsulrIDfr3LTU" class="button underline" target="_blank">
                                <span class="zmdi zmdi-open-in-new"></span> Spotify
                            </a> 
                            <a href="https://www.google.com/podcasts?feed=aHR0cHM6Ly9hbmNob3IuZm0vcy8zN2UxMzE0Yy9wb2RjYXN0L3Jzcw==" class="button underline" target="_blank">
                                <span class="zmdi zmdi-google"></span> Podcasts
                            </a> <a href="https://anchor.fm/s/37e1314c/podcast/rss" class="button underline" target="_blank">
                                <span class="zmdi zmdi-rss"></span> RSS
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection