<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Vino</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('bodegas.partials.header')

    <div class="container mt-5">
        <h1>Detalles del Vino</h1>
        <table class="table table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Año</th>
                    <th scope="col">Alcohol</th>
                    <th scope="col">Tipo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $vino->id }}</td>
                    <td>{{ $vino->nombre }}</td>
                    <td>{{ $vino->descripcion }}</td>
                    <td>{{ $vino->año }}</td>
                    <td>{{ $vino->alcohol }}</td>
                    <td>{{ $vino->tipo }}</td>
                </tr>
            </tbody>
        </table>

        <a href="/" class="btn btn-primary">Volver al inicio</a>
    </div>
    @include('bodegas.partials.footer')

    <!-- Bootstrap Bundle JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script></body>

</html>
