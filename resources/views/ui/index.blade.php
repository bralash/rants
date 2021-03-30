@extends('partials.master')
<style id="castilo-inline-style">
    .featured-content {
        background-color: #313131;
        background-image: url(assets/img/sample-header-small.jpg);
    }

    @media (min-width: 768px) {
        .featured-content {
            background-image: url(assets/img/sample-header.jpg);
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

<header id="featured" class="featured-content fade-background-0 padding-top-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-8 col-xl-7">
                <div class="latest-episode">
                    <div class="podcast-episode">
                        <p class="big text-uppercase opacity-50">Feature Episode</p>
                        <h1 class="entry-title"><a href="single-episode.html">{{$featured->title}}</a></h1>
                        <div class="podcast-episode">
                            <div class="podcast-episode-player" data-episode-download="{{$featured->audio_url}}" data-episode-download-button="Download Episode" data-episode-duration="00:00" data-episode-size="">
                                <audio class="wp-audio-shortcode" preload="none" style="width: 100%;" controls="controls">
                                    <source src="{{$featured->audio_url}}" type="audio/mp3" />
                                </audio>
                            </div>
                        </div>
                        <p>
                            @if (!empty($featured->apple_podcasts))
                                <a href="{{$featured->apple_podcasts}}" class="button button-filled button-color"><span class="zmdi zmdi-apple"></span> Podcast</a>
                            @endif
    
                            @if (!empty($featured->google_podcasts))
                                <a href="{{$featured->google_podcasts}}" class="button button-white"><span class="zmdi zmdi-google"></span> Podcast</a>
                            @endif
                            
                            <a href="https://anchor.fm/s/37e1314c/podcast/rss" class="button button-white"><span class="zmdi zmdi-rss"></span> RSS Feed</a>
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
                    
                    @foreach ($episodes as $episode)
                        <article class="entry entry-episode">
                            <div class="row align-items-lg-center">
                                <div class="col-12 col-md-4 col-xl-3">
                                    <div class="entry-media entry-image multiply-effect">
                                        <a href="{{URL::to('episode')}}/{{$episode->slug}}">
                                            <img class="first" src="{{$episode->img_url}}" width="736" height="736" alt="">
                                            <span class="second"><img src="{{$episode->img_url}}" width="736" height="736" alt=""></span>
                                            <span class="third"><img src="{{$episode->img_url}}" width="736" height="736" alt=""></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8 col-xl-9">
                                    <header class="entry-header">
                                        <div class="entry-meta">
                                            <span class="posted-in"><span class="screen-reader-text">Posted in: </span> <a href="episodes.html" rel="bookmark">Season {{$episode->season}}</a></span>  <span class="posted-on"><span class="screen-reader-text">Posted in: </span> Episode {{$episode->episode}}</span> <span class="posted-on"><span class="screen-reader-text">Posted on: </span> <span class="entry-date published">{{$episode->posted_on}}</span></span> 
                                        </div>
                                        <h2 class="entry-title"><a href="{{URL::to('episode')}}/{{$episode->slug}}" rel="bookmark">{{$episode->title}}</a></h2>
                                    </header>
                                    <div class="entry-content">
                                        {{ \Illuminate\Support\Str::limit($episode->description, 150, $end='...') }} <a href="{{URL::to('episode')}}/{{$episode->slug}}">(read more)</a></p>
                                    </div>
                                    <div class="entry-audio">
                                        <div class="podcast-episode">
                                            <div class="podcast-episode-player" data-episode-duration="00:00">
                                                <audio class="wp-audio-shortcode" preload="none" style="width: 100%;" controls="controls">
                                                    <source src="{{$episode->audio_url}}" type="audio/mpeg" />
                                                </audio>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach

                </div>
                <div class="pagination pagination-load-more">
                    <a href="episodes.html" class="button button-filled"><span class="zmdi zmdi-more"></span> Browse More</a>
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
                    <img src="{{URL::asset('img/team.jpeg')}}" width="590" height="590" alt="">
                </a>
            </div>
            <div class="col-12 col-md-6">
                <h3>New Stuff Each Week!</h3>
                <p>Listen below and order your copy from Amazon, iTunes or your favorite record store. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseqa untur magni dolores eos qui ratione sequi.</p>
                <p><a href="https://anchor.fm/rants-and-confessions" class="button button-small button-white" target="_blank">Anchor</a> <a href="#" class="button button-small button-white">iTunes</a> <a href="#" class="button button-small button-white">Spotify</a></p>
            </div>
        </div>
    </div>
</footer>
@endsection