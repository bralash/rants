@extends('partials.admin')
@section('title','Login')

<style>
    .featured-content {
        background-color: #313131;
        background-image: url(assets/img/sample-header-small.jpg);
    }

    @media (min-width: 768px) {
        .featured-content {
            background-image: url(assets/img/sample-header.jpg);
        }
    }

    label {
        color: #fff !important;
    }

    p.error-message {
        margin-bottom: 1px;
        color: tomato;
    }
</style>

@section('featured')

<header id="featured" class="featured-content fade-background-50 padding-top-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md">
                <h1 class="entry-title">Login</h1>

                <form action="{{URL::to('auth/login')}}" class="contact_form" method="post">
                    @csrf

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="error-message">{{$error}}</p>
                        @endforeach
                    @endif

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="name">Email</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="name">Password</label>
                            <input type="password" name="password" id="password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <button type="submit" class="button-filled button-color"><span class="zmdi zmdi-lock-open"></span> Login</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-auto">
                <p class="big opacity-80">He who much is given, much is expected.</p>
            </div>
        </div>
    </div>
</header>
@endsection