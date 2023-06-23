@extends('layouts.panel')

@section('template_title')
    Material
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Material') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('materials.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Ingresar Nuevo') }}
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
										<th>Especialidad</th>
										<th>Uso</th>
										<th>Marca</th>
										<th>Cantidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materials as $material)
                                        <tr>
                                            <td>{{ $material->id }}</td>
                                            
											<td>{{ $material->Name }}</td>
											<td>{{ $material->Description }}</td>
											<td>{{ $material->Speciality }}</td>
											<td>{{ $material->Use }}</td>
											<td>{{ $material->Brand }}</td>
											<td>{{ $material->Amount }}</td>

                                            <td>
                                                <form action="{{ route('materials.destroy',$material->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('materials.show',$material->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('materials.edit',$material->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $materials->links() !!}
            </div>
        </div>
    </div>
@endsection
