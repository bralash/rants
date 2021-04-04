@extends('partials.master')
@section('title','Page Not Found')
@section('meta')
    @include('partials.404')
@endsection

@section('featured')
<div class="error404">
    <header id="featured" class="featured-content padding-top-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <h1 class="entry-title"><span class="d-none d-sm-inline-block">Error</span> 4<span class="floating-letter">0</span>4</h1>
                    <p>Apologies, but no results were found for the requested page.</p>
                    <p><a href="{{URL::to('/test')}}" class="button button-small">Go Home</a></p>
                </div>
            </div>
        </div>
    </header>
</div>
@endsection