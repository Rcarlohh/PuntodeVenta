<!-- resources/views/empleados/crear.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empleado</title>
</head>
<body>
    <h1>Crear Empleado</h1>
    
    <!-- Mostrar mensajes de validación o éxito -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <!-- Formulario para crear un nuevo empleado -->
    <form action="{{ route('crear') }}" method="post">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="puesto">Puesto:</label>
        <input type="text" id="puesto" name="puesto" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
