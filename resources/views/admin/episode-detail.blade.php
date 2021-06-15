@extends('partials.admin')
@section('title',$episode->title)

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

@section('navigation')
    @include('partials.navigation')
@endsection

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
                        <p>{!! $episode->description !!}</p>
                        <h1>Update episode</h1>

                        <form action="{{URL::to('/update-episode')}}/{{$episode->id}}" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <label for="apple_podcasts">Apple Podcast</label>
                                    <input type="text" name="apple_podcasts" id="apple_podcasts" value="{{$episode->apple_podcasts}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <label for="google_podcasts">Google Podcast</label>
                                    <input type="text" name="google_podcasts" id="google_podcasts" value="{{$episode->google_podcasts}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <label for="spotify">Spotify</label>
                                    <input type="text" name="spotify" id="spotify" value="{{$episode->spotify}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <label for="segment_id">Segment</label>
                                    <select name="segment_id" id="segment_id">
                                        @foreach ($segments as $segment)
                                            <option value="{{$segment->id}}">{{$segment->title}}</option>
                                        @endforeach
                                    </select>

                                    
                                    <span style="margin-left: 15px">
                                        <input class="star" type="checkbox" title="Feature" name="featured"
                                         @if($episode->featured) value="{{$episode->featured}}" checked @endif>
                                    </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <button type="submit" class="button-filled button-color">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>
@endsection