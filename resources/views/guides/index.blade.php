@extends('layouts.base')

@section('content')
        <!-- Banner -->
        <div class="youplay-banner banner-top youplay-banner-parallax small">
            <div class="image" style="background-image: url('{{ asset('images/Goddess-kiss_sc_10.png') }}')">
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
                                <a href="#!" class="btn">All</a>
                                <a href="#!" class="btn">Pilot</a>
                                <a href="#!" class="btn">Formation</a>
                            </div>
                        </div>
                        <div class="col-md-3">

                            <form action="#">
                                <label for="messages_search" class="sr-only">Search Pilot</label>
                                <div class="youplay-input">
                                    <input type="text" name="s" id="messages_search" placeholder="Search pilot...">
                                </div>
                            </form>

                        </div>
                    </div>

                    <table class="youplay-messages table table-hover">
                        <tbody>

                        @for ($i = 0; $i < 10; $i++)
                            @include('guides.listElement')
                        @endfor

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