@extends('layouts.panel')

@section('template_title')
    {{ $output->name ?? "{{ __('Show') Output" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Salidas</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('outputs.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha: </strong>
                            {{ $output->Date }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion: </strong>
                            {{ $output->Description }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad: </strong>
                            {{ $output->Cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Id Materiales: </strong>
                            {{ $output->id_materials }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
