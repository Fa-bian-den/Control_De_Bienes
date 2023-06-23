<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('Names', $teacher->Names, ['class' => 'form-control' . ($errors->has('Names') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('Names', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Primer Apellido') }}
            {{ Form::text('First_Surname', $teacher->First_Surname, ['class' => 'form-control' . ($errors->has('First_Surname') ? ' is-invalid' : ''), 'placeholder' => 'Primer Apellido']) }}
            {!! $errors->first('First_Surname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Segundo Apellido') }}
            {{ Form::text('Second_Surname', $teacher->Second_Surname, ['class' => 'form-control' . ($errors->has('Second_Surname') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Apellido']) }}
            {!! $errors->first('Second_Surname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Address', $teacher->Address, ['class' => 'form-control' . ($errors->has('Address') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Cellphone', $teacher->Cellphone, ['class' => 'form-control' . ($errors->has('Cellphone') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Cellphone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Edad') }}
            {{ Form::text('Age', $teacher->Age, ['class' => 'form-control' . ($errors->has('Age') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
            {!! $errors->first('Age', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sexo') }}
            {{ Form::text('Sex', $teacher->Sex, ['class' => 'form-control' . ($errors->has('Sex') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
            {!! $errors->first('Sex', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cargo') }}
            {{ Form::text('Charge', $teacher->Charge, ['class' => 'form-control' . ($errors->has('Charge') ? ' is-invalid' : ''), 'placeholder' => 'Cargo']) }}
            {!! $errors->first('Charge', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Continuar') }}</button>
    </div>
</div>