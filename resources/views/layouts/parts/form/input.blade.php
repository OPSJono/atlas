<div class="form-group{!! $errors->has($field)?' has-error':'' !!}">
    <div class="col-{!! isset($colsLeft) ? $colsLeft : '12' !!}">
        @if(!isset($noLabel))
            @if ($model->getAttributeRequired($field))
                {!! sprintf(
                    Form::label(
                        (isset($formFieldName)) ? $formFieldName : $field,
                        '%s',
                        array('class' => 'col-xs-' . (isset($colsLeft) ? $colsLeft : '4') . ' control-label')
                    ),
                    isset($fieldLabel) ? $fieldLabel : $model->getAttributeLabel($field) . '<span class="reqd"></span>'
                ) !!}
            @else
                {!! Form::label( (isset($formFieldName)) ? $formFieldName : $field,
                    isset($fieldLabel) ? $fieldLabel : $model->getAttributeLabel($field),
                    array('class' => 'col-xs-' . (isset($colsLeft) ? $colsLeft : '4') . ' control-label')
                ) !!}
            @endif
        @endif
    </div>
    <div class="col-{!! isset($colsRight) ? $colsRight : '12' !!}">

        <div class="input-group">
            <?php
                $placeHolder = isset($fieldLabel) ? $fieldLabel : $model->getAttributeLabel($field);

                $formArray = array(
                    'class' => 'form-control',
                    'placeholder' => $placeHolder,
                );
                if(isset($readonly)) {
                    $formArray['readonly'] = 'readonly';
                }
                if(isset($disabled) && $disabled != false) {
                    $formArray['disabled'] = true;
                }
            ?>

            {!! Form::text(
                (isset($formFieldName)) ? $formFieldName : $field,
                $model->$field,
                $formArray
            ) !!}

            @if (isset($inputAddon))
                <div class="input-group-append input-group-addon">
                    <span class="input-group-text">{!! $inputAddon !!}</span>
                </div>
            @endif
        </div>

        @if ($errors->has($field))
            <div class="error">{!! $errors->first($field) !!}</div>
        @endif

        @if(isset($helpBlock))
            <div class="help-block form-text text-muted"> {!!isset($helpBlock) ? $helpBlock : '' !!}</div>
        @endif
    </div>
</div>
