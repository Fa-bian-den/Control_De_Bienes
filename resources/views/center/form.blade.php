<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Name', $center->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Address', $center->Address, ['class' => 'form-control' . ($errors->has('Address') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Cellphone', $center->Cellphone, ['class' => 'form-control' . ($errors->has('Cellphone') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Cellphone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo') }}
            {{ Form::text('E_Mail', $center->E_Mail, ['class' => 'form-control' . ($errors->has('E_Mail') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('E_Mail', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad de Pabellones') }}
            {{ Form::text('Amount_Pavilions', $center->Amount_Pavilions, ['class' => 'form-control' . ($errors->has('Amount_Pavilions') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad de Pabellones']) }}
            {!! $errors->first('Amount_Pavilions', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_sector') }}
            {{ Form::text('id_sectors', $center->id_sectors, ['class' => 'form-control' . ($errors->has('id_sectors') ? ' is-invalid' : ''), 'placeholder' => 'Id Sector']) }}
            {!! $errors->first('id_sectors', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
    </div>
</div>