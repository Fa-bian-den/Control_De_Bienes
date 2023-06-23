@extends('layouts.panel')

@section('template_title')
    {{ $career->name ?? "{{ __('Show') Career" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Carrera</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('careers.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre: </strong>
                            {{ $career->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion: </strong>
                            {{ $career->Description }}
                        </div>
                        <div class="form-group">
                            <strong>Horario: </strong>
                            {{ $career->Schedule }}
                        </div>
                        <div class="form-group">
                            <strong>Id Teachers:</strong>
                            {{ $career->id_teachers }}
                        </div>
                        <div class="form-group">
                            <strong>Id Sectors:</strong>
                            {{ $career->id_sectors }}
                        </div>
                        <div class="form-group">
                            <strong>Id Rooms:</strong>
                            {{ $career->id_rooms }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
