<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion de bodegas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('bodegas.partials.header')
    <main class="h-dvh">
        <form action="{{ route('bodegas.store') }}" method="POST">
            @csrf
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Datos de la bodega</h5>
                                <p class="card-text">Rellene todos los campos.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" name="nombre"
                                            class="form-control mb-3" value="" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email</label>
                                        <input type="text" name="email"
                                            class="form-control mb-3" value=""
                                            placeholder="email@domain.com" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="localizacion">Localización</label>
                                        <input type="text" name="localizacion"
                                            class="form-control mb-3" value=""
                                            placeholder="" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="telefono">Telefono</label>
                                        <input type="text" name="telefono"
                                            class="form-control mb-3" value=""
                                            placeholder="" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="contacto">Contacto</label>
                                        <input type="text" name="contacto"
                                            class="form-control mb-3" value=""
                                            placeholder="" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="fundacion">Fecha de fundacion:</label>
                                        <input type="date" name="fundacion"
                                            class="form-control mb-3" value=""
                                            placeholder="" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="restaurante">Restaurante:</label>
                                        <select name="restaurante"
                                            class="form-control mb-3">
                                            <option value="S">Si</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="hotel">Hotel:</label>
                                        <select name="hotel"
                                            class="form-control mb-3">
                                            <option value="S">Si</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input type="checkbox" name="billing_same" id="billing_same"
                                                class="form-check-input" required />
                                            <label for="billing_same" class="form-check-label">Acepto los <span
                                                    class="text-primary">terminos y condiciones.</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="d-flex justify-content-end">
                                            <button type="submit"
                                                class="btn btn-primary mr-2">Agregar</button>
                                            <a href="/bodegas"
                                                class="btn btn-danger">Cancelar</a>
                                        </div>
                                    </div>
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
