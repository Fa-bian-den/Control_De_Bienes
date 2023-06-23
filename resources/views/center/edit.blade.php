@extends('layouts.panel')

@section('template_title')
    {{ __('Update') }} Center
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} Datos del Centro</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('centers.update', $center->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('center.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
