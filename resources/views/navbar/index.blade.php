<!-- Navbar -->
<nav class="navbar-youplay navbar navbar-default navbar-fixed-top ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/Logo1.png') }}" alt="">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li @if(Request::is('home')) class="active" @endif>
                    <a href="{{ route('home') }}" role="button" aria-expanded="false">
                        Home <span class="label">guides</span>
                    </a>
                </li>
                <li @if(Request::is('pilots')) class="active" @endif>
                    <a href="{{ route('pilotList') }}" role="button" aria-expanded="false">
                        Pilots <span class="label">Our waifus</span>
                    </a>
                </li>
                <li @if(Request::is('guides/create')) class="active" @endif>
                    <a href="{{ route('guides.create') }}" role="button" aria-expanded="false">
                        Create Guide <span class="label">Just do it!</span>
                    </a>
                </li>
                @auth
                    <li @if(Request::is('my/guides')) class="active" @endif>
                        <a href="{{ route('user.guides') }}" role="button" aria-expanded="false">
                            My Guides <span class="label">I created them</span>
                        </a>
                    </li>
                @endauth
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li>
                        <a href="{{ route('login') }}" role="button" aria-expanded="false">
                            Login
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" role="button" aria-expanded="false">
                            Register
                        </a>
                    </li>
                @else
                    <li class="dropdown dropdown-hover">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span> <span class="label">it is you</span>
                        </a>
                        <div class="dropdown-menu">
                            <ul role="menu">
                                <li><a href="{{ route('user.show', Auth::user()) }}">Profile </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!-- /Navbar -->