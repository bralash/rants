@extends('partials.admin')
@section('title','Confessions')
    

@section('navigation')
    @include('partials.navigation')
@endsection

@section('main')
<main id="content" class="padding-top-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="entry-title" style="font-size: 2rem">Confessions({{$confessionsCount}})</h1>
                    </div>
                    <div class="col-md-5" style="line-height: 50px;margin-bottom: 5px;">
                        <div class="call-to-action col-12 col-sm-auto order-5 order-sm-2 order-lg-4">
                            <a href="{{URL::to('/archive-confessions')}}" class="button button-small">
                                <span class="zmdi zmdi-archive"></span> Archive
                            </a>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</main>
@endsection