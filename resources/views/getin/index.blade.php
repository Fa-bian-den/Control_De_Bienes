@extends('layouts.panel')

@section('template_title')
    Getin
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Entradas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('getins.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
                                        
										<th>Fecha</th>
										<th>Descripcion</th>
										<th>Id Materiales</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getins as $getin)
                                        <tr>
                                            <td>{{ $getin->id }}</td>
                                            
											<td>{{ $getin->Date }}</td>
											<td>{{ $getin->Description }}</td>
											<td>{{ $getin->id_materials }}</td>

                                            <td>
                                                <form action="{{ route('getins.destroy',$getin->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('getins.show',$getin->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('getins.edit',$getin->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $getins->links() !!}
            </div>
        </div>
    </div>
@endsection
