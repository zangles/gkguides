@extends('layouts.baseStandAlone')

@section('content')
    <section class="content-wrap full youplay-login">
        <div class="youplay-banner banner-top">
            <div class="image" style="background-image: url('{{ asset('images/imagen_titulo_by_razhielth-dbnpt4z.png') }}')"></div>

            <div class="info">
                <div>
                    <div class="container align-center">
                        <div class="youplay-form">
                            <h1>Register</h1>
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <div class="youplay-input">
                                    <input id="name" type="text" name="name" value="{{ old('name') }}" required placeholder="Name">
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <div class="youplay-input">
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="Email">
                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <div class="youplay-input">
                                    <input id="password" type="password" name="password" required placeholder="Password">
                                </div>
                                <div class="youplay-input">
                                    <input id="password-confirm" type="password" name="password_confirmation" required placeholder="Confirm Password">
                                </div>
                                <button class="btn btn-default db">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection