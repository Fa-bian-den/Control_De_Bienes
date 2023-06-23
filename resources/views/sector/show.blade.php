@extends('layouts.panel')

@section('template_title')
    {{ $sector->name ?? "{{ __('Show') Sector" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Sector</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sectors.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre: </strong>
                            {{ $sector->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion: </strong>
                            {{ $sector->Description }}
                        </div>
                        <div class="form-group">
                            <strong>Id Docente: </strong>
                            {{ $sector->id_teachers }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
