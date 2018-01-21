@extends('layouts.base')

@section('content')
    <div class="youplay-banner banner-top youplay-banner-parallax small">
        <div class="image" style="background-image: url('{{ asset('images/wall2.png') }}')">
        </div>

        <div class="info">
            <div>
                <div class="container youplay-user">
                    <a href="#" class="angled-img">
                        <div class="img">
                            <img src="{{ asset('images/c_060_1.png') }}" alt="">
                        </div>
                    </a>
                    <div class="user-data">
                        <h2>Guide Title</h2>
                        <div class="activity">
                            <div>
                                <div class="num">6009</div>
                                <div class="title">Views</div>
                            </div>
                            <div>
                                <div class="num">845</div>
                                <div class="title">Votes</div>
                            </div>
                            <div>
                                <div class="num">+689</div>
                                <div class="title">Score</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-20">
                <a href="#!" class="btn btn-sm btn-success ml-0">Vote UP</a>
                <a href="#!" class="btn btn-sm btn-default">Vote Down</a>
            </div>
        </div>
    </div>
    <!-- /Banner -->


    <div class="container youplay-content">

            @include('guides.pilotGuide')


    </div>
@endsection