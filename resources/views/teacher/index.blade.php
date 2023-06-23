@extends('layouts.panel')

@section('template_title')
    Teacher
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Docentes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('teachers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Docente') }}
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
                                        
										<th>Nombres</th>
										<th>Primer Apellido</th>
										<th>Segundo Apellido</th>
										<th>Direccion</th>
										<th>Telefono</th>
										<th>Edad</th>
										<th>Sexo</th>
										<th>Cargo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teachers as $teacher)
                                        <tr>
                                            <td>{{ $teacher->id }}</td>
                                            
											<td>{{ $teacher->Names }}</td>
											<td>{{ $teacher->First_Surname }}</td>
											<td>{{ $teacher->Second_Surname }}</td>
											<td>{{ $teacher->Address }}</td>
											<td>{{ $teacher->Cellphone }}</td>
											<td>{{ $teacher->Age }}</td>
											<td>{{ $teacher->Sex }}</td>
											<td>{{ $teacher->Charge }}</td>

                                            <td>
                                                <form action="{{ route('teachers.destroy',$teacher->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('teachers.show',$teacher->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('teachers.edit',$teacher->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $teachers->links() !!}
            </div>
        </div>
    </div>
@endsection
