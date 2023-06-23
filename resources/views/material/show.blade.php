@extends('layouts.panel')

@section('template_title')
    {{ $material->name ?? "{{ __('Show') Material" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostar') }} Datos del Material</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materials.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre: </strong>
                            {{ $material->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion: </strong>
                            {{ $material->Description }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad: </strong>
                            {{ $material->Speciality }}
                        </div>
                        <div class="form-group">
                            <strong>Uso: </strong>
                            {{ $material->Use }}
                        </div>
                        <div class="form-group">
                            <strong>Marca: </strong>
                            {{ $material->Brand }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad: </strong>
                            {{ $material->Amount }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
