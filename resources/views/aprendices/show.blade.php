<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow-lg border-0">

                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Detalle del Aprendiz</h4>
                </div>

                <div class="card-body">

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <strong>NIS:</strong> {{ $aprendiz->NIS }}
                        </div>
                        <div class="col-md-6">
                            <strong>Documento:</strong> {{ $aprendiz->Numdoc }}
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <strong>Nombre:</strong> {{ $aprendiz->Nombres }} {{ $aprendiz->Apellidos }}
                        </div>
                        <div class="col-md-6">
                            <strong>Teléfono:</strong> {{ $aprendiz->Telefono }}
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-12">
                            <strong>Dirección:</strong> {{ $aprendiz->Direccion }}
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <strong>Correo institucional:</strong> {{ $aprendiz->CorreoInstitucional }}
                        </div>
                        <div class="col-md-6">
                            <strong>Correo personal:</strong> {{ $aprendiz->CorreoPersonal }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Sexo:</strong> {{ $aprendiz->Sexo }}
                        </div>
                        <div class="col-md-6">
                            <strong>Fecha nacimiento:</strong> {{ $aprendiz->FechaNacimiento }}
                        </div>
                    </div>

                    <hr>

                    <div class="d-flex gap-2">

                        <a href="{{ route('aprendices.pdf', $aprendiz->NIS) }}" target="_blank" class="btn btn-success">
                            Descargar Certificado
                        </a>

                        <a href="{{ route('aprendices.enviarpdf') }}" class="btn btn-primary">
                            Enviar PDF
                        </a>

                        <a href="{{ route('aprendices.index') }}" class="btn btn-secondary">
                            Volver
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
