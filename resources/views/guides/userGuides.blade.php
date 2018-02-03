@extends('layouts.base')

@section('content')
    <!-- Banner -->
    <div class="youplay-banner banner-top youplay-banner-parallax small">
        <div class="image" style="background-image: url('{{ asset('images/Goddess-kiss_sc_10.png') }}')">
        </div>

        <div class="youplay-user-navigation">
            <div class="container">
                <ul>
                    <li class="active"><a href="user-activity.html">My Guides</a>
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

                <table class="youplay-messages table table-hover">
                    <tbody>
                        @foreach($guides as $guide)
                            @include('guides.listUserElement')
                        @endforeach
                    </tbody>

                </table>

                <nav>
                    <ul class="pager">
                        <li><a href="#">Previous</a>
                        </li>
                        <li><a href="#">Next</a>
                        </li>
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