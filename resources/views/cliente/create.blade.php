<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREAR CLIENTE</title>
</head>
<body>
    <h1>CREAR CLIENTE</h1>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf

        <label>
            Teléfono:
            <br>
            <input type="text" name="tfno" class="form-control" required>
        </label>
        <br>
        <label>
            Número Social:
            <br>
            <input type="text" name="num_social" class="form-control" required>
        </label>
        <br>
        <label>
            Código:
            <br>
            <input type="text" name="codigo" class="form-control" required>
        </label>
        <br>
        <label>
            Domicilio:
            <br>
            <input type="text" name="domicilio" class="form-control" required>
        </label>
        <br>
        <button type="submit">Crear</button>
    </form>
</body>
</html>