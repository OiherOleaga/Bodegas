<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion de bodegas</title>
    <!-- Incluir los archivos CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('bodegas.partials.header')
    <main class="container my-4">
        <section class="bg-white p-4">
            <div class="text-center">
                <h1 class="mb-4 display-4">Gestión de Bodegas</h1>
                <p class="mb-4 lead">Bienvenid@ a la base de datos oficial de nuestra aplicación. (Portese bien :D)</p>
            </div>
        </section>

        <div class="row justify-content-center my-4">
            <div class="col-md-6">
                <a href="{{ route('bodegas.create') }}" class="btn btn-primary btn-lg btn-block">+ Añadir Bodega</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Localización</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Email</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bodegas as $bodega)
                        <tr>
                            <td>{{ $bodega->id }}</td>
                            <td>{{ $bodega->nombre }}</td>
                            <td>{{ $bodega->localizacion }}</td>
                            <td>{{ $bodega->telefono }}</td>
                            <td>{{ $bodega->email }}</td>
                            <td>
                                <a href="/bodegas/bodega/{{ $bodega->id }}" class="btn btn-primary btn-sm">Entrar</a>
                                <form action="{{ route('bodegas.destroy', $bodega->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    @include('bodegas.partials.footer')

    <!-- Incluir los archivos JavaScript de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
