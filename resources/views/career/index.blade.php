@extends('layouts.panel')

@section('template_title')
    Career
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Carreras') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('careers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Ingresar nueva') }}
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
                                        
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Horario</th>
										<th>Id Docente</th>
										<th>Id Sector</th>
										<th>Id Ubicacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($careers as $career)
                                        <tr>
                                            <td>{{ $career->id }}</td>
                                            
											<td>{{ $career->Name }}</td>
											<td>{{ $career->Description }}</td>
											<td>{{ $career->Schedule }}</td>
											<td>{{ $career->id_teachers }}</td>
											<td>{{ $career->id_sectors }}</td>
											<td>{{ $career->id_rooms }}</td>

                                            <td>
                                                <form action="{{ route('careers.destroy',$career->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('careers.show',$career->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('careers.edit',$career->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $careers->links() !!}
            </div>
        </div>
    </div>
@endsection
