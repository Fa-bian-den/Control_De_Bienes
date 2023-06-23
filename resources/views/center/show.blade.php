@extends('layouts.panel')

@section('template_title')
    {{ $center->name ?? "{{ __('Show') Center" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Centro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('centers.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre: </strong>
                            {{ $center->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion: </strong>
                            {{ $center->Address }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono: </strong>
                            {{ $center->Cellphone }}
                        </div>
                        <div class="form-group">
                            <strong>Correo: </strong>
                            {{ $center->E_Mail }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad de Pabellones: </strong>
                            {{ $center->Amount_Pavilions }}
                        </div>
                        <div class="form-group">
                            <strong>Id Sector: </strong>
                            {{ $center->id_sectors }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
