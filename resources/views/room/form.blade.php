<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Name', $room->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Address', $room->Address, ['class' => 'form-control' . ($errors->has('Address') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_sector') }}
            {{ Form::text('id_sectors', $room->id_sectors, ['class' => 'form-control' . ($errors->has('id_sectors') ? ' is-invalid' : ''), 'placeholder' => 'Id Sector']) }}
            {!! $errors->first('id_sectors', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_materiales') }}
            {{ Form::text('id_materials', $room->id_materials, ['class' => 'form-control' . ($errors->has('id_materials') ? ' is-invalid' : ''), 'placeholder' => 'Id Materiales']) }}
            {!! $errors->first('id_materials', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
    </div>
</div>