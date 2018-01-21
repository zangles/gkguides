<tr>
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
    <td class="message-action" style="width: 190px">
        <div class="btn-group">
            <a href="#!" class="btn btn-primary btn-xs">Edit</a>
            <a href="#!" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal-x">Delete</a>
        </div>
    </td>
</tr>

<!-- Modal -->
<div class="modal fade" id="myModal-x" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Delete Guide</h4>
            </div>
            <div class="modal-body">
                Are you sure?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Yes, delete it</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
<!-- /Modals -->


