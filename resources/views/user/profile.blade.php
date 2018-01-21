@extends('layouts.base')

@section('content')
        <!-- Banner -->
        <div class="youplay-banner banner-top youplay-banner-parallax small">
            <div class="image" style="background-image: url('{{ asset('images/game-diablo-iii-1400x656.jpg') }}')">
            </div>

            <div class="youplay-user-navigation">
                <div class="container">
                    <ul>
                        <li class="active"><a href="#">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>

            @include('user.widget')


        </div>
        <!-- /Banner -->

        <div class="container youplay-content">

            <div class="row">

                <div class="col-md-9">

                    <form action="#">
                        <h3>Change Password:</h3>
                        <div class="form-horizontal mt-30 mb-40">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="cur_password">Current Password:</label>
                                <div class="col-sm-10">
                                    <div class="youplay-input">
                                        <input type="password" id="cur_password" placeholder="Current Password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="new_password">New Password:</label>
                                <div class="col-sm-10">
                                    <div class="youplay-input">
                                        <input type="password" id="new_password" placeholder="New Password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Change Password</button>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>



            </div>
        </div>
@endsection