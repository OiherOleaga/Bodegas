<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Vino</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('bodegas.partials.header')
    <main class="h-dvh">
        <form action="{{ route('vinos.store', $bodega->id) }}" method="POST">
            @csrf
            <div class="container mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Datos de la bodega</h5>
                        <p class="card-text">Rellene todos los campos.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" class="form-control" value="">
                            </div>
                            <div class="col-lg-6">
                                <label for="descripcion">Descripción</label>
                                <input type="text" name="descripcion" class="form-control" value="">
                            </div>
                            <div class="col-lg-6">
                                <label for="alcohol">Alcohol</label>
                                <input type="text" name="alcohol" class="form-control" value="">
                            </div>
                            <div class="col-lg-6">
                                <label for="año">Año</label>
                                <input type="date" name="año" class="form-control" value="">
                            </div>
                            <div class="col-lg-6">
                                <label for="tipo">Tipo</label>
                                <select name="tipo" class="form-control">
                                    <option value="Tinto">Tinto</option>
                                    <option value="Reserva">Reserva</option>
                                </select>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <div class="form-check">
                                    <input type="checkbox" name="billing_same" id="billing_same" class="form-check-input"
                                        required>
                                    <label class="form-check-label" for="billing_same">Acepto los <span class="text-primary">términos y
                                            condiciones.</span></label>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Agregar</button>
                                    <a href="/bodegas/bodega/{{ $bodega->id }}" class="btn btn-danger">Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
    @include('bodegas.partials.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
