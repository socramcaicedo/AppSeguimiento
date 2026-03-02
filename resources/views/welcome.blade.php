<!DOCTYPE html>
<html>
<head>
    <title>Panel Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">

    <h2 class="text-center mb-5 fw-bold text-primary">
        Sistema de Gestión - Menú Principal
    </h2>

    <div class="row g-4">

        {{-- APRENDICES --}}
        <div class="col-md-3">
            <a href="{{ route('aprendices.index') }}" class="btn btn-primary w-100 p-4 shadow rounded-4">
                <i class="bi bi-people fs-2"></i><br>
                Aprendices
            </a>
        </div>

        {{-- PROGRAMA FORMACION --}}
        <div class="col-md-3">
            <a href="{{ route('programa.index') }}" class="btn btn-success w-100 p-4 shadow rounded-4">
                <i class="bi bi-book fs-2"></i><br>
                Programa Formación
            </a>
        </div>

        {{-- CENTRO FORMACION --}}
        <div class="col-md-3">
            <a href="{{ route('centrodeformacion.index') }}" class="btn btn-warning w-100 p-4 shadow rounded-4">
                <i class="bi bi-building fs-2"></i><br>
                Centro Formación
            </a>
        </div>

        {{-- TIPOS DOCUMENTO --}}
        <div class="col-md-3">
            <a href="/tipodocumento" class="btn btn-info w-100 p-4 shadow rounded-4">
                <i class="bi bi-card-text fs-2"></i><br>
                Tipos Documento
            </a>
        </div>

        {{-- FICHA CARACTERIZACION --}}
        <div class="col-md-3">
            <a href="/fichadecaracterizacion" class="btn btn-dark w-100 p-4 shadow rounded-4">
                <i class="bi bi-clipboard-data fs-2"></i><br>
                Ficha Caracterización
            </a>
        </div>

        {{-- ENTE CONFORMADOR --}}
        <div class="col-md-3">
            <a href="/enteconformador" class="btn btn-secondary w-100 p-4 shadow rounded-4">
                <i class="bi bi-diagram-3 fs-2"></i><br>
                Ente Conformador
            </a>
        </div>

        {{-- ROLES ADMIN --}}
        <div class="col-md-3">
            <a href="/rolesadmin" class="btn btn-danger w-100 p-4 shadow rounded-4">
                <i class="bi bi-person-badge fs-2"></i><br>
                Roles Administrativos
            </a>
        </div>

        {{-- INSTRUCTORES --}}
        <div class="col-md-3">
            <a href="/instructores" class="btn btn-primary w-100 p-4 shadow rounded-4">
                <i class="bi bi-person-video3 fs-2"></i><br>
                Instructores
            </a>
        </div>

        {{-- REGIONALES --}}
        <div class="col-md-3">
            <a href="/regionales" class="btn btn-success w-100 p-4 shadow rounded-4">
                <i class="bi bi-geo-alt fs-2"></i><br>
                Regionales
            </a>
        </div>

        {{-- EPS --}}
        <div class="col-md-3">
            <a href="{{ route('eps.index') }}" class="btn btn-warning w-100 p-4 shadow rounded-4">
                <i class="bi bi-hospital fs-2"></i><br>
                EPS
            </a>
        </div>

    </div>

</div>

</body>
</html>
