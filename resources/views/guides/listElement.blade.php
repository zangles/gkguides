<tr class="guideElement" data-url="{{ route('guides.show', [1]) }}">
    <td class="message-from">
        <a href="#" class="angled-img">
            <div class="img">
                @if ($guide->type == \App\Guide::TYPE_PILOT)
                    <img src="http://gkgirls.info.gf/img/CommanderAtlas/{{ $guide->pilot_id }}_1.png" width="80" height="80" alt="">
                @else
                    {{--<img src="{{ asset('images/c_060_1.png') }}" width="80" height="80" alt="">--}}
                @endif
            </div>
        </a>

        <a href="#" class="message-from-name" title="Guide Name">{{ $guide->name }}</a>
        <br>
        <span class="date">{{ $guide->created_at }}</span>
    </td>
    <td class="message-description">
        <a href="#" class="message-description-name" title="View Message">Description</a>
        <br>
        <div class="message-excerpt">{{ $guide->description }}</div>
    </td>
    <td class="message-action">
        <span class="messages-count">+{{ rand(0, 100) }}</span>
    </td>
</tr>


