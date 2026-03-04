<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Crear Usuario</h2>

    <form action="/users/store" method="POST">

        <!-- Si estás usando Laravel, debes dejar esto -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Correo</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Contraseña</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Rol</label>
            <select name="rol" class="form-control" required>
                <option value="">Seleccione</option>
                <option value="administrativo">Administrativo</option>
                <option value="instructor">Instructor</option>
                <option value="aprendiz">Aprendiz</option>
                <option value="usuario">Usuario</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Estado</label>
            <select name="estado" class="form-control">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>
</div>

</body>
</html>
