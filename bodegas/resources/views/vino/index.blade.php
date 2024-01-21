@extends('layouts.app')

@section('template_title')
    Vino
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Vino') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('vinos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
										<th>Descripcion</th>
										<th>Año</th>
										<th>Alcohol</th>
										<th>Tipo De Vino</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vinos as $vino)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $vino->nombre }}</td>
											<td>{{ $vino->descripcion }}</td>
											<td>{{ $vino->año }}</td>
											<td>{{ $vino->alcohol }}</td>
											<td>{{ $vino->tipo de vino }}</td>

                                            <td>
                                                <form action="{{ route('vinos.destroy',$vino->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('vinos.show',$vino->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('vinos.edit',$vino->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $vinos->links() !!}
            </div>
        </div>
    </div>
@endsection
