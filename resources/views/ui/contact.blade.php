@extends('partials.master')
@section('title','Contact Us')
@section('meta')
    @include('partials.contact')
@endsection
    
<style>
    .featured-content {
        background-color: #313131;
        background-image: url(img/sample-contact-header.jpg);
    }

    @media (min-width: 768px) {
        .featured-content {
            background-image: url(img/sample-contact-header.jpg);
        }
    }
</style>

@section('featured')
<header id="featured" class="featured-content fade-background-50 padding-top-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md">
                <h1 class="entry-title">Contact Us</h1>
            </div>
            <div class="col-12 col-md-auto">
                <p class="big opacity-80">
                    We encourage you to get in touch with us.
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
                    We will really be glad to hear all the amazing feedback you have to us.
                </h3>
            </div>
            <div class="w-100"></div>
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <p>
                    The primary goal of this podcast is to connect with people and share their 
                    awesome stories that they otherwise would've kept bottled up. This is why we 
                    would appreciate to hear from you. Feel free to reach out to us about <mark>anything</mark>
                    at all.
                </p>
            </div>
            <div class="w-100"></div>
            <div class="col-12 col-md-10 col-lg-8">
                <div class="row text-center justify-content-center">
                    <div class="col-6 col-sm-4 col-lg-3 address-info">
                        <h5 style="margin-bottom: 0px">
                            <a href="{{URL::to('/donate')}}" class="button button-small" style="margin-bottom: 1px">
                                <span class="zmdi zmdi-money"></span> Donate
                            </a>
                        </h5>
                        <p>+233 243-789-079<br> Emmanuel Asaber</p>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-3 address-info">
                        <h5><span class="zmdi zmdi-phone"></span> Phone</h5>
                        <p>+233 243-789-079<br> +233 503-123-939</p>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-3 address-info">
                        <h5><span class="zmdi zmdi-email"></span> Email</h5>
                        <p>rantsnconfess@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 margin-top">
                <form id="contact_form" action="{{URL::to('/contact')}}" method="post">
                    {{ csrf_field() }}
                    <div class="message" style="display:none"><div id="contact_alert" class="alert">aaaa</div></div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div class="col-12">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="button-filled button-color"><span class="zmdi zmdi-mail-send"></span> Get in touch</button>
                        </div>
                    </div>
                </form>
            </div>
            {{-- <div class="col-12 col-lg-10">
                <a href="#" target="_blank" class="box-with-border"><img src="tmp/sample-map.jpg" width="1280" height="800" alt=""></a>
            </div> --}}
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