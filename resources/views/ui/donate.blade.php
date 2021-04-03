@extends('partials.master')
@section('title','Donate')
@section('meta')
    @include('partials.donate')
@endsection

<style>
    .featured-content {
        background-color: #313131;
        background-image: url(img/sample-donate-header.jpg);
    }

    @media (min-width: 768px) {
        .featured-content {
            background-image: url(img/sample-donate-header.jpg);
        }
    }
</style>

@section('featured')
<header id="featured" class="featured-content fade-background-50 padding-top-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md">
                <h1 class="entry-title">Donate</h1>
            </div>
            <div class="col-12 col-md-auto">
                <p class="big opacity-80">
                    You don't have to, but it would be nice if you did
                </p>
            </div>
        </div>
    </div>
</header>
@endsection

@section('main')
<main id="content" class="padding-top-bottom">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-8 col-lg-7 text-center">
                <h3>
                    Why should you donate?
                </h3>
            </div>
            <div class="w-100"></div>
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <p>
                    We all know therapy can be quite expensive and we are all aware about the stigma that
                    comes with therapy sometimes. We're <strong>NOT</strong> therapists and we are not here 
                    to give legal advice as we are <strong>NOT</strong> lawyers. Sometimes the internet comes 
                    together at random to help a stranger.
                </p>
                <p>
                    We are trying to create a safe space where people can comfortably share their ordeals and experiences.
                    A place where the community is always ready to help and we hope you'll get a solution or some form of 
                    relieve from listening to the opinion of others who have been in a similar situation and how they got out.
                </p>
                <p>
                    But as electricity helps a machine to function, we need funds to be able to continue our mission without 
                    frequent hiccups. This can be achieved by your help. You can save a soul today with your donations.
                    <mark>Rants & Confessions</mark> team thanks you for your donations.
                </p>
            </div>
            <div class="w-100"></div>
            <div class="col-12 col-md-10 col-lg-8">
                <div class="row text-center justify-content-center">
                    <div class="col-6 col-sm-3 col-lg-3 address-info">
                        <h5><span class="zmdi zmdi-smartphone-android"></span> MOMO</h5>
                        <p>+233 243-789-079<br> Emmanuel Asaber</p>
                    </div>
                    <div class="col-6 col-sm-3 col-lg-3 address-info">
                        <h5><span class="zmdi zmdi-money-box"></span> Access Bank</h5>
                        <p>Emmanuel Asaber<br> 0471608987781 <br> Takoradi</p>
                    </div>
                    <div class="col-6 col-sm-3 col-lg-3 address-info">
                        <h5><span class="zmdi zmdi-money-box"></span> GT Bank</h5>
                        <p>Emmanuel Asaber<br> 4011103031590<br> Takoradi</p>
                    </div>
                    <div class="col-6 col-sm-3 col-lg-3 address-info">
                        <h5><span class="zmdi zmdi-money-box"></span> UMB</h5>
                        <p>Emmanuel Asaber<br> 0142346320019<br> North Industrial Area</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
    