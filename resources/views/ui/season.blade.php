@extends('partials.master')
@section('title', $title)
@section('meta')
    @include('partials.seasons')
@endsection

<style>
    .featured-content {
    background-color: #313131;
    background-image: url(../img/sample-episodes-header.jpg);
}

@media (min-width: 768px) {
    .featured-content {
        background-image: url(../img/sample-episodes-header.jpg);
    }
}

.sales-box {
    background-image: url(../assets/img/sample-sales.jpg);
}

.latest-news {
    background-image: url(../assets/img/latest-news.jpg);
}
</style>

@section('featured')
<header id="featured" class="featured-content fade-background-50 padding-top-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md">
                <h1 class="entry-title">{{$title}}</h1>
            </div>
            <div class="col-12 col-md-auto">
                <p>
                    <a href="https://anchor.fm/s/37e1314c/podcast/rss" class="button button-color button-filled">
                        <span class="zmdi zmdi-rss"></span> Subscribe to RSS Feed
                    </a>
                </p>
            </div>
        </div>
    </div>
</header>
@endsection


@section('main')
<main id="content" class="has-sidebar padding-top-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-9">
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
                                            <span class="posted-in">
                                                <span class="screen-reader-text">Posted in: </span> 
                                                <a href="{{URL::to('/season')}}/{{$episode->season}}" rel="bookmark">Season {{$episode->season}}</a>
                                            </span>  
                                            <span class="posted-on"><span class="screen-reader-text">Posted in: </span> Episode {{$episode->episode}}</span> 
                                            <span class="posted-on">
                                                <span class="screen-reader-text">Posted on: </span> 
                                                <span class="entry-date published">{{$episode->posted_on}}</span>
                                            </span> 
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
                    <div class="pagination">
                        {{$episodes->links()}}
                    </div>
                </div>
            </div>
            <div id="sidebar" class="col-12 col-md-4 col-lg-3">
                <div class="widget widget_categories">
                    <h5 class="add-separator"><span>Categories</span></h5>
                    <ul>
                        <li class="cat-item"><a href="#">Podcast</a>
                            <ul class="children">
                                @foreach ($seasons as $season)
                                    <li class="cat-item"><a href="{{URL::to('/season')}}/{{$season->season}}">Season {{$season->season}}</a></li>
                                @endforeach
                                
                            </ul>
                        </li>
                        <li class="cat-item"><a href="#">Segment</a>
                            <ul class="children">
                                @foreach ($segments as $segment)
                                    <li class="cat-item"><a href="{{URL::to('/segment')}}/{{$segment->slug}}">{{$segment->title}}</a></li>
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
                <p>
                    New and exciting episodes every week. Feel free to listen on your favorite platform of choice.
                    For your voice to be heard, send in your <i>confessions</i> on the related topic each week.
                </p>
                <p>
                    <a href="https://anchor.fm/rants-and-confessions" class="button button-small button-white" target="_blank">Anchor</a>
                    <a href="https://podcasts.apple.com/gh/podcast/rants-and-confessions/id1536307081" class="button button-small button-white" target="_blank">Apple Podcasts</a>
                    <a href="https://open.spotify.com/show/5xP3LJgQnNsulrIDfr3LTU" class="button button-small button-white">Spotify</a>
                </p>
            </div>
        </div>
    </div>
</footer>
@endsection