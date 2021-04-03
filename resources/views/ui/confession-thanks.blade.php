@extends('partials.master')
@section('title', 'Thank you')

@section('main')
<section class="error404">
    <header id="featured" class="featured-content padding-top-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <h1 class="entry-title"><span class="d-none d-sm-inline-block">Thank</span> Y<span class="floating-letter">O</span>U</h1>
                    <p>We appreciate your confession. Listen to our next episode.</p>
                    <p><a href="{{URL::to('/')}}" class="button button-small">Go Home</a></p>
                </div>
            </div>
        </div>
    </header>
</section>
@endsection