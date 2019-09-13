<div class="modal-content-inner" data-modal-size="large">
    {!! Form::model($user, ['route' => ['user.update', $user->id], 'class' => 'js-simple-modal-form-submit form-horizontal form-horizontal-label-left']) !!}
        <div class="modal-header modal-header-transparent">
            <h4 class="modal-title">Edit User</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                @include('layouts.parts.form.input',['model' => $user, 'field' => 'forename'])
                @include('layouts.parts.form.input',['model' => $user, 'field' => 'surname'])
                @include('layouts.parts.form.input',['model' => $user, 'field' => 'email'])
                @include('layouts.parts.form.input',['model' => $user, 'field' => 'lockout_time'])
        </div>
        <div class="modal-footer modal-footer-transparent">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success js-modal-submit">Save</button>
        </div>
    {!! Form::close() !!}
</div>