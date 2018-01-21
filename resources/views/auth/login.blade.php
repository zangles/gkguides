@extends('layouts.baseStandAlone')

@section('content')
    <section class="content-wrap full youplay-login">
        <div class="youplay-banner banner-top">
            <div class="image" style="background-image: url('{{ asset('images/imagen_titulo_by_razhielth-dbnpt4z.png') }}')"></div>

            <div class="info">
                <div>
                    <div class="container align-center">
                        <div class="youplay-form">
                            <h1>Login</h1>
                            <form action="{{ route('login') }}" method="POST">
                                {{ csrf_field() }}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <div class="youplay-input">
                                    <input type="text" name="email" placeholder="Email">
                                </div>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <div class="youplay-input">
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                                <button class="btn btn-default db">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection