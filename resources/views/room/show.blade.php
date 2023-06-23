@extends('layouts.panel')

@section('template_title')
    {{ $room->name ?? "{{ __('Show') Room" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Datos de Ubicacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rooms.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre: </strong>
                            {{ $room->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion: </strong>
                            {{ $room->Address }}
                        </div>
                        <div class="form-group">
                            <strong>Id Sector: </strong>
                            {{ $room->id_sectors }}
                        </div>
                        <div class="form-group">
                            <strong>Id Materiales: </strong>
                            {{ $room->id_materials }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
