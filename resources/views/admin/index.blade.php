@extends('partials.admin')
@section('title','Admin Dashboard')

<style>
    .featured-content {
        background-image: url(assets/img/sample-admin-header.jpg);
    }
</style>

@section('navigation')

@include('partials.navigation')

@endsection

@section('featured')

    <header id="featured" class="featured-content fade-background-50 padding-top-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md">
                    <h1 class="entry-title">Dashboard</h1>
                </div>
                <div class="col-12 col-md-auto">
                    <p class="big opacity-80">Simple Statics and Operations of main website</p>
                </div>
            </div>
        </div>
    </header>
    
@endsection

@section('main')
    
<main id="content" class="padding-top-bottom">
    <div class="container">
        <div class="row justify-content-center stats">
            <div class="col-md-2">
                <div>
                    <p>
                        <strong>{{$season}}</strong>
                        Seasons
                    </p>
                </div>
            </div>
            <div class="col-md-2">
                <div>
                    <p>
                        <strong>{{$episode}}</strong>
                        Episodes
                    </p>
                </div>
            </div>
            <div class="col-md-2">
                <div>
                    <p>
                        <strong>{{$segment}}</strong>
                        Segments
                    </p>
                </div>
            </div>
            <div class="col-md-2">
                <div>
                    <p>
                        <strong>1.8k</strong>
                        Plays
                    </p>
                </div>
            </div>
            <div class="col-md-2">
                <div>
                    <p>
                        <strong>600</strong>
                        Listeners
                    </p>
                </div>
            </div>
            
            <div class="col-md-2">
                <div>
                    <p>
                        <strong>2</strong>
                        Hosts
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection