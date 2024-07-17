<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETALLES DEL CLIENTE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>DETALLES DEL CLIENTE</h1>
        <div>
            <strong>Teléfono:</strong> {{ $cliente->tfno }}
        </div>
        <div>
            <strong>Número Social:</strong> {{ $cliente->num_social }}
        </div>
        <div>
            <strong>Código:</strong> {{ $cliente->codigo }}
        </div>
        <div>
            <strong>Domicilio:</strong> {{ $cliente->domicilio }}
        </div>
        <a href="{{ route('clientes.index') }}" class="btn btn-primary mt-3">Volver a la lista</a>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
