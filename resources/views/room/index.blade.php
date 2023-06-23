@extends('layouts.panel')

@section('template_title')
    Room
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ubicacion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('rooms.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Direccion</th>
										<th>Id Sector</th>
										<th>Id Materiales</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rooms as $room)
                                        <tr>
                                            <td>{{ $room->id }}</td>
                                            
											<td>{{ $room->Name }}</td>
											<td>{{ $room->Address }}</td>
											<td>{{ $room->id_sectors }}</td>
											<td>{{ $room->id_materials }}</td>

                                            <td>
                                                <form action="{{ route('rooms.destroy',$room->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('rooms.show',$room->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('rooms.edit',$room->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $rooms->links() !!}
            </div>
        </div>
    </div>
@endsection
