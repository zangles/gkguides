<tr class="guideElement" data-url="{{ route('guides.show', [1]) }}">
    <td class="message-from">
        <a href="#" class="angled-img">
            <div class="img">
                <img src="{{ asset('images/c_060_1.png') }}" width="80" height="80" alt="">
            </div>
        </a>

        <a href="#" class="message-from-name" title="Guide Name">Guide Name</a>
        <br>
        <span class="date">10th Dec 2015 at 6:29 am</span>
    </td>
    <td class="message-description">
        <a href="#" class="message-description-name" title="View Message">Description</a>
        <br>
        <div class="message-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, fuga fugiat ipsa magni modi natus neque optio. Ad cumque ducimus facilis labore minima neque quisquam repudiandae, saepe sint totam vitae.</div>
    </td>
    <td class="message-action">
        <span class="messages-count">+{{ rand(0, 100) }}</span>
    </td>
</tr>


