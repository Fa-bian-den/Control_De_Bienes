@extends('layouts.panel')

@section('template_title')
    Output
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Salidas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('outputs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Cantidad</th>
										<th>Id Materiales</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($outputs as $output)
                                        <tr>
                                            <td>{{ $output->id }}</td>
                                            
											<td>{{ $output->Date }}</td>
											<td>{{ $output->Description }}</td>
											<td>{{ $output->Cantidad }}</td>
											<td>{{ $output->id_materials }}</td>

                                            <td>
                                                <form action="{{ route('outputs.destroy',$output->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('outputs.show',$output->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('outputs.edit',$output->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $outputs->links() !!}
            </div>
        </div>
    </div>
@endsection
