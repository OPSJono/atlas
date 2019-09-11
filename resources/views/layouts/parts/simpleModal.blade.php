<!-- Simple Modal -->
<div class="modal fade" id="simpleModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-transparent">
                <h4 class="modal-title">Loading ...</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="lead text-center">
                    <div class="loader_img">
                        <img src="{{asset('assets/img/loader.gif')}}" alt="loading..." height="64" width="64" />
                    </div>
                </div>
            </div>
            <div class="modal-footer modal-footer-transparent">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Simple Modal -->