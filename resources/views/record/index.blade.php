@extends('layouts.panel')

@section('template_title')
    Record
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Historial') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('records.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar nuevo') }}
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
                                        
										<th>Descripcion</th>
										<th>Fecha</th>
										<th>Id Entradas</th>
										<th>Id Salidas</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($records as $record)
                                        <tr>
                                            <td>{{ $record->id }}</td>
                                            
											<td>{{ $record->Description }}</td>
											<td>{{ $record->Date }}</td>
											<td>{{ $record->id_getins }}</td>
											<td>{{ $record->id_outputs }}</td>

                                            <td>
                                                <form action="{{ route('records.destroy',$record->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('records.show',$record->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('records.edit',$record->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $records->links() !!}
            </div>
        </div>
    </div>
@endsection
