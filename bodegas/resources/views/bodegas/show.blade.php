<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalles de la Bodega</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('bodegas.partials.header')
    <main class="mx-4 h-dvh">
        <div class="container mt-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title text-center">Datos de la Bodega, {{ $bodega->nombre }}</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Localización</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contacto</th>
                                    <th scope="col">Fundación</th>
                                    <th scope="col">Restaurante</th>
                                    <th scope="col">Hotel</th>
                                    <th scope="col">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $bodega->id }}</td>
                                    <td>{{ $bodega->nombre }}</td>
                                    <td>{{ $bodega->localizacion }}</td>
                                    <td>{{ $bodega->telefono }}</td>
                                    <td>{{ $bodega->email }}</td>
                                    <td>{{ $bodega->contacto }}</td>
                                    <td>{{ $bodega->fundacion }}</td>
                                    <td>{{ $bodega->restaurante == 'S' ? 'Si' : 'No' }}</td>
                                    <td>{{ $bodega->hotel == 'S' ? 'Si' : 'No' }}</td>
                                    <td class="text-center">
                                        <a href="/bodegas/bodega/{{ $bodega->id }}"
                                            class="btn btn-warning btn-sm">Editar</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title text-center">Vinos disponibles</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Año</th>
                                    <th scope="col">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bodega->vinos as $vino)
                                <tr>
                                    <td>{{ $vino->nombre }}</td>
                                    <td>{{ $vino->descripcion }}</td>
                                    <td>{{ $vino->tipo }}</td>
                                    <td>{{ $vino->año }}</td>
                                    <td class="text-center">
                                    <a href="{{ route('vinos.ver', ['bodega' => $bodega->id, 'vino' => $vino->id]) }}" class="btn btn-primary btn-sm">Entrar</a>

                                        <form action="{{ route('vinos.destroy', ['bodega' => $bodega->id, 'vino' => $vino->id]) }}"  method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-danger btn-sm">Borrar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="text-center mb-4">
                <a href="{{ route('vinos.create', $bodega->id) }}" class="btn btn-info">+ Añadir Vino</a>
            </div>
            <div class="text-center">
                <a href="/" class="btn btn-danger">Atras</a>
            </div>
        </div>
    </main>
    @include('bodegas.partials.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
