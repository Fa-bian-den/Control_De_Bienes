<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Name', $career->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Description', $career->Description, ['class' => 'form-control' . ($errors->has('Description') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Horario') }}
            {{ Form::text('Schedule', $career->Schedule, ['class' => 'form-control' . ($errors->has('Schedule') ? ' is-invalid' : ''), 'placeholder' => 'Horario']) }}
            {!! $errors->first('Schedule', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ID_docente') }}
            {{ Form::text('id_teachers', $career->id_teachers, ['class' => 'form-control' . ($errors->has('id_teachers') ? ' is-invalid' : ''), 'placeholder' => 'Id Docente']) }}
            {!! $errors->first('id_teachers', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_sector') }}
            {{ Form::text('id_sectors', $career->id_sectors, ['class' => 'form-control' . ($errors->has('id_sectors') ? ' is-invalid' : ''), 'placeholder' => 'Id Sector']) }}
            {!! $errors->first('id_sectors', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_ubicacion') }}
            {{ Form::text('id_rooms', $career->id_rooms, ['class' => 'form-control' . ($errors->has('id_rooms') ? ' is-invalid' : ''), 'placeholder' => 'Id Ubicacion']) }}
            {!! $errors->first('id_rooms', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
    </div>
</div>