@extends('partials.admin')
@section('title','Episodes')
    

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
                        <h1 class="entry-title" style="font-size: 2rem">Episodes({{$episodeCount}})</h1>
                    </div>
                    <div class="col-md-5" style="line-height: 50px;margin-bottom: 5px;">
                        <div class="call-to-action col-12 col-sm-auto order-5 order-sm-2 order-lg-4">
                            <span id="refresh-episodes" class="button button-small"><span class="zmdi zmdi-refresh-sync"></span> Refresh</span>
                        </div>
                    </div>
                </div>
                
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($episodes as $episode)
                            <tr>
                                <td>{{$episode->title}}</td>
                                <td style="text-align: right">
                                    <a href="{{URL::to('/episode')}}/{{$episode->slug}}" class="button button-small">
                                        View
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">
                                <div class="pagination">
                                    {{$episodes->links()}}
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection