<div class="modal fade" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post" class="form-horizontal" data-toggle="validator">
                {{ csrf_field() }}
                {{ csrf_token() }}

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="Close">
                        <span aria-hidden="true">&times; </span>
                    </button>
                    <h4 class="modal-title">Add Contact</h4>
                </div>

                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">

                    </div>
                </div>

            </form>






            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->