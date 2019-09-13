<div class="modal-content-inner" data-modal-size="large">
    {!! Form::model($user, ['route' => ['user.delete', $user->id], 'class' => 'js-simple-modal-form-submit form-horizontal form-horizontal-label-left']) !!}
        <div class="modal-header modal-header-transparent">
            <h4 class="modal-title">Edit User</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="alert alert-warning">
                <span class="fa fa-exclamation-triangle"></span> Are you sure you want to delete this Account?
            </div>
        </div>
        <div class="modal-footer modal-footer-transparent">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger js-modal-submit">Delete</button>
        </div>
    {!! Form::close() !!}
</div>