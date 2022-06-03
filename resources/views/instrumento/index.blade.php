@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; color: black; justify-content: space-between; align-items: center;">
           
                            <span id="card_title">
                                {{ __('Lista de Instrumentos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('instrumentos.create') }}" class="btn btn-primary btn-sm float-right"  style="background-color: black;" data-placement="left">
                                  {{ __('Añadir') }}
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
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Familia</th>
										<th>Material</th>
										<th>País</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($instrumentos as $instrumento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $instrumento->Nombre }}</td>
											<td>{{ $instrumento->Familia }}</td>
											<td>{{ $instrumento->Material }}</td>
											<td>{{ $instrumento->País }}</td>

                                            <td>
                                                <form action="{{ route('instrumentos.destroy',$instrumento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " style="background-color:green ;" href="{{ route('instrumentos.show',$instrumento->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" style="background-color: black;" href="{{ route('instrumentos.edit',$instrumento->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="background-color: red;" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $instrumentos->links() !!}
            </div>
        </div>
    </div>
@endsection
