@extends('layouts.panel')

@section('template_title')
    {{ $getin->name ?? "{{ __('Show') Getin" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostar') }} Datos de Entrada</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('getins.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha: </strong>
                            {{ $getin->Date }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion: </strong>
                            {{ $getin->Description }}
                        </div>
                        <div class="form-group">
                            <strong>Id Materiales: </strong>
                            {{ $getin->id_materials }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
