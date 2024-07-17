<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR CLIENTE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>EDITAR CLIENTE</h1>

        <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="tfno">Teléfono:</label>
                <input type="text" name="tfno" class="form-control" value="{{ $cliente->tfno }}" required>
            </div>

            <div class="form-group">
                <label for="num_social">Número Social:</label>
                <input type="text" name="num_social" class="form-control" value="{{ $cliente->num_social }}" required>
            </div>

            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" name="codigo" class="form-control" value="{{ $cliente->codigo }}" required>
            </div>

            <div class="form-group">
                <label for="domicilio">Domicilio:</label>
                <input type="text" name="domicilio" class="form-control" value="{{ $cliente->domicilio }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
