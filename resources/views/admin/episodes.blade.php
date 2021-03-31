@extends('partials.admin')
@section('title','Episodes')
    

@section('navigation')
    @include('partials.navigation')
@endsection


@section('main')
<main id="content" class="padding-top-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="entry-title" style="font-size: 2rem">Episodes({{$episodes}})</h1>
                    </div>
                    <div class="col-md-6" style="line-height: 50px;margin-bottom: 5px;">
                        <div class="call-to-action col-12 col-sm-auto order-5 order-sm-2 order-lg-4">
                            <span id="refresh-episodes" class="button button-small"><span class="zmdi zmdi-refresh-sync"></span> Refresh</span>
                        </div>
                    </div>
                </div>
                <hr style="margin-top: 0">
                
            </div>
        </div>
    </div>
</main>
@endsection