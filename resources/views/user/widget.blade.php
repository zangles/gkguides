<div class="info">
    <div>
        <div class="container youplay-user">
            <a href="{{ route('user.show', Auth::user()) }}" class="angled-img">
                <div class="img">
                    <img src="{{ asset('images/c_060_1.png') }}" alt="">
                </div>
            </a>
            <!--
                -->
            <div class="user-data">
                <h2>{{ Auth::user()->name }}</h2>
                <div class="location"></i> {{ Auth::user()->email }}</div>
                <div class="activity">
                    <div>
                        <div class="num">69</div>
                        <div class="title">Guides</div>
                    </div>
                    <div>
                        <div class="num">12</div>
                        <div class="title">Negative votes</div>
                    </div>
                    <div>
                        <div class="num">689</div>
                        <div class="title">Positive votes</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>