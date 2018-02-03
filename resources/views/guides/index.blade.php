@extends('layouts.base')

@section('content')
        <!-- Banner -->
        <div class="youplay-banner banner-top youplay-banner-parallax small">
            <div class="image" style="background-image: url('{{ asset('images/wall3.jpg') }}')">
            </div>

            <div class="youplay-user-navigation">
                <div class="container">
                    <ul>
                        <li class="active"><a href="user-activity.html">Guide List</a>
                        </li>
                    </ul>
                </div>
            </div>

            @auth()
                @include('user.widget')
            @endauth

        </div>
        <!-- /Banner -->

        <div class="container youplay-content">

            <div class="row">

                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-9">
                            Guide type
                            <div class="btn-group">
                                <a href="{{ route('home') }}" class="btn @if(is_null(request()->query('type'))) active @endif">All</a>
                                <a href="{{ route('home',['type' => \App\Guide::TYPE_PILOT]) }}" class="btn @if(request()->query('type') == \App\Guide::TYPE_PILOT) active @endif">Pilot</a>
                                <a href="{{ route('home',['type' => \App\Guide::TYPE_FORMATION]) }}" class="btn @if(request()->query('type') == \App\Guide::TYPE_FORMATION) active @endif">Formation</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <form method="GET">
                                <label for="messages_search" class="sr-only">Search Pilot</label>
                                <div class="youplay-input">
                                    <input type="text" name="search" id="search" placeholder="Search pilot...">
                                </div>
                            </form>
                        </div>
                    </div>

                    <table class="youplay-messages table table-hover">
                        <tbody>
                            @foreach($guides as $guide)
                                @include('guides.listElement')
                            @endforeach
                        </tbody>
                    </table>

                    <nav>
                        <ul class="pager align-center">
                            {{ $guides->appends(request()->except('page'))->links() }}
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('.guideElement').click(function(){
                window.location.href = $(this).data('url');
            });
        });
    </script>
@endsection