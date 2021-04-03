@extends('partials.master')
@section('title','Anonymous Confessions')
@section('meta')
    @include('partials.confess')
@endsection

<style>
    .featured-content {
        background-color: #313131;
        background-image: url(img/sample-confession-header.jpg);
    }

    @media (min-width: 768px) {
        .featured-content {
            background-image: url(img/sample-confession-header.jpg);
        }
    }

    label {
        color: #fff !important;
    }

    p.error-message {
        margin-bottom: 1px;
        color: tomato;
    }
    .audio-upload {
        background: #eee;
        padding: 15px;
    }
    input[type=file] {
        display: none;
    }
</style>

@section('featured')
<header id="featured" class="featured-content fade-background-50 padding-top-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md">
                <span style="position: absolute; top: -10px; left: 20px">Anonymous</span>
                <h1 class="entry-title">Confessions</h1>
            </div>
            <div class="col-12 col-md-auto">
                <p class="big opacity-80">
                    Send us the message not the messanger.
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
            <div class="col-12 col-md-7 col-lg-8">
                <form action="{{URL::to('/confess')}}" method="post" class="contact_form">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <textarea name="message" id="message" cols="30" rows="15" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <button type="submit" class="button-filled button-color">Confess</button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="sidebar" class="col-12 col-md-5 col-lg-4">
                <div class="audio-upload">
                    <h5 style="margin-bottom: 1px">Upload Audio - (2MB Max)</h5>
                    <hr style="margin: 0px; margin-bottom: 10px;">
                    <form action="{{URL::to('/upload-audio')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <label class="button-filled button button-small" for="audio">Browse Audio</label>
                                <input type="file" name="rant_audio" id="audio">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <button type="submit" class="button-filled button-small button-color">
                                    Upload
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection