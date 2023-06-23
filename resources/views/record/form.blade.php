<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Description', $record->Description, ['class' => 'form-control' . ($errors->has('Description') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('Date', $record->Date, ['class' => 'form-control' . ($errors->has('Date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Entradas') }}
            {{ Form::text('id_getins', $record->id_getins, ['class' => 'form-control' . ($errors->has('id_getins') ? ' is-invalid' : ''), 'placeholder' => 'Id Entradas']) }}
            {!! $errors->first('id_getins', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Salidas') }}
            {{ Form::text('id_outputs', $record->id_outputs, ['class' => 'form-control' . ($errors->has('id_outputs') ? ' is-invalid' : ''), 'placeholder' => 'Id Salidas']) }}
            {!! $errors->first('id_outputs', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
    </div>
</div>