<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Name', $material->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Description', $material->Description, ['class' => 'form-control' . ($errors->has('Description') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Especialidad') }}
            {{ Form::text('Speciality', $material->Speciality, ['class' => 'form-control' . ($errors->has('Speciality') ? ' is-invalid' : ''), 'placeholder' => 'Especialidad']) }}
            {!! $errors->first('Speciality', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Uso') }}
            {{ Form::text('Use', $material->Use, ['class' => 'form-control' . ($errors->has('Use') ? ' is-invalid' : ''), 'placeholder' => 'Uso']) }}
            {!! $errors->first('Use', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::text('Brand', $material->Brand, ['class' => 'form-control' . ($errors->has('Brand') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('Brand', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('Amount', $material->Amount, ['class' => 'form-control' . ($errors->has('Amount') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('Amount', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
    </div>
</div>