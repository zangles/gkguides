<div class="container youplay-content">

    <div class="row">

        <div class="col-md-9">
            <h2 class="mt-0">Description</h2>
            <p>Aliquam euismod at <strong>potenti</strong> velit risus erat nulla blandit leo. Sagittis cubilia turpis. Taciti gravida litora. Id. Vestibulum. Eu augue augue duis rhoncus sociosqu. Quam nec erat <strong>a</strong> volutpat eleifend nibh Bibendum
                malesuada ridiculus. Dapibus vel nascetur. Sollicitudin dictumst, leo donec vivamus potenti cursus cras phasellus ullamcorper.</p>

            <blockquote>Dui <em>sociosqu</em> litora suscipit senectus id etiam aliquet gravida adipiscing <strong>dignissim</strong> hac Luctus. Pretium orci nunc est diam lobortis cursus. Faucibus diam ante. Odio. Maecenas. Lacus ornare montes condimentum sit fames torquent
                quis dignissim scelerisque ullamcorper <em>at</em> ullamcorper Lacinia iaculis nisi aliquam consectetuer per dolor <strong>porttitor</strong> libero pulvinar sociis elit nam. Turpis, congue mi Nisi ipsum.</blockquote>

            <p><strong>Ante</strong> suspendisse sociosqu facilisis augue Penatibus urna Dapibus volutpat Lacus enim sit Quam posuere vestibulum metus aenean eget imperdiet donec sed eget morbi mus erat platea per mollis semper torquent curae; arcu a sapien.
                Interdum sollicitudin <em>luctus</em> curabitur vestibulum mus facilisis a ipsum nibh facilisis aenean convallis curabitur tempus.</p>

            <p>Sit commodo tortor natoque ut donec suscipit imperdiet magna, netus magna aliquet, natoque molestie <strong>non</strong> mauris pellentesque primis eu non lorem convallis <strong>lorem</strong> ipsum, habitant augue eros tristique amet vehicula
                non facilisis a eget aliquet feugiat mollis class <em>enim</em> habitant posuere suspendisse, ridiculus etiam. Ultricies <strong>platea</strong> ridiculus nostra.</p>

        </div>

        <!-- Right Side -->
        <div class="col-md-3">

            <!-- Next Match -->
            <div class="side-block">
                @include('pilot.portarit')
                <h4 class="block-title">Top {PilotName} Guides</h4>
                <div class="block-content">
                    <table class="youplay-messages table table-hover">
                        @for ($i = 0; $i < 4; $i++)
                            @include('guides.listElementMini')
                        @endfor
                    </table>
                </div>
            </div>
            <div class="side-block">
                <h4 class="block-title">Astral Guild Pilot Opinion</h4>
                <div class="block-content">
                    <table class="youplay-messages table table-hover">
                        <tr>
                            <td>Arena</td>
                            <td><img src="{{ asset('images/ranking/S.png') }}" style="max-width: 40px" alt=""></td>
                        </tr>
                        <tr>
                            <td>Shootout</td>
                            <td><img src="{{ asset('images/ranking/A.png') }}" style="max-width: 40px" alt=""></td>
                        </tr>
                        <tr>
                            <td>Kaiser Dragon</td>
                            <td><img src="{{ asset('images/ranking/B.png') }}" style="max-width: 40px" alt=""></td>
                        </tr>
                        <tr>
                            <td>Kaiser Demon</td>
                            <td><img src="{{ asset('images/ranking/C.png') }}" style="max-width: 40px" alt=""></td>
                        </tr>
                        <tr>
                            <td>Kaiser Kraken</td>
                            <td><img src="{{ asset('images/ranking/F.png') }}" style="max-width: 40px" alt=""></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /Next Match -->
        </div>
        <!-- Right Side -->

    </div>

</div>