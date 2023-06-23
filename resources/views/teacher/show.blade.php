@extends('layouts.panel')

@section('template_title')
    {{ $teacher->name ?? "{{ __('Show') Teacher" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Datos Del Docente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('teachers.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres: </strong>
                            {{ $teacher->Names }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Apellido: </strong>
                            {{ $teacher->First_Surname }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Apellido: </strong>
                            {{ $teacher->Second_Surname }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion: </strong>
                            {{ $teacher->Address }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono: </strong>
                            {{ $teacher->Cellphone }}
                        </div>
                        <div class="form-group">
                            <strong>Edad: </strong>
                            {{ $teacher->Age }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo: </strong>
                            {{ $teacher->Sex }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo: </strong>
                            {{ $teacher->Charge }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
