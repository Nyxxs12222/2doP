<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @session('exito')
        <script>
            Swal.fire({
                title: "¡Buen trabajo!",
                text: "{{ session('exito') }}",
                icon: "success"
            });
        </script>
    @endsession
    
    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>
    <div class="container  col-md-4">
        <form action="{{ route('postForm') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label  class="form-label">Correo: </label>
                <input type="text" class="form-control" name="correo" value="{{ old('correo') }}">
                <small class="fts-italic text-danger">{{ $errors->first('correo') }}</small>
            </div>

            <div class="mb-3">
                <label class="form-label">Contraseña: </label>
                <input type="text" class="form-control" name="contraseña" value="{{ old('contraseña') }}">
                <small class="fts-italic text-danger">{{ $errors->first('contraseña') }}</small>
            </div>                

            <div class="mb-3">
                <label  class="form-label">Edad: </label>
                <input type="text" class="form-control" name="edad" value="{{ old('edad') }}">
                <small class="fts-italic text-danger">{{ $errors->first('edad') }}</small>
            </div>
            <button type="submit" class="btn btn-danger "> Guardar Usuario</button>
        </form>
    </div>
</body>
</html>