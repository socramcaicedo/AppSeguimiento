<form action="{{ route('aprendices.enviarpdf') }}" method="get" enctype="multipart/form-data">
    @csrf

    <label>Correo destino</label>
    <input type="email" name="email" required>

    <label>Subir PDF</label>
    <input type="file" name="pdf" accept="application/pdf" required>

    <button type="submit">Enviar</button>

</form>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
