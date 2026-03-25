<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Error de autenticación</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center justify-content-center vh-100">

<div class="card shadow p-5 text-center" style="max-width: 400px; width: 100%;">

    <h2 class="text-danger mb-3">⚠ Error</h2>

    <p class="mb-4">
        Te has equivocado con tus credenciales.<br>
        Verifica bien e inténtalo nuevamente.
    </p>

    <!-- BOTÓN VOLVER AL LOGIN -->
    <a href="{{ route('login') }}" class="btn btn-primary w-100">
        Iniciar sesión nuevamente
    </a>

</div>

</body>
</html>
