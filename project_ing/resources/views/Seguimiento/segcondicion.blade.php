@extends('layouts/plantilla')
@section('title', 'segimienyto')
@section('contenido')

@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $mascota ? 'Editar' : 'Crear' }} Seguimiento Condicion</title>
</head>

<body>
    <div class="container mt-3">
        <h2>Seguimiento Condicion  Mascota</h2>
        <form method="POST" action="{{ route('guardar.seguimiento.mascotas') }}">
            @csrf

            <input type="hidden" value="{{ $mascota->id_mascota }}" name="id_mascota">
            <input type="hidden" value="{{ $segCondicion->id_condicion ?? '' }}" name="id_condicion">

            <div class="mb-2 mt-3 container">
                <label for="txtcondicion" class="form-label">Condicion:</label>

                <input type="text" name="condicion" value="{{ $segCondicion->condicion ?? '' }}"
                    class="form-control">
            </div>
            <div class="mb-2 mt-3 container">
                <label for="txtseguimiento" class="col-sm-2 col-form-label">seguimiento</label>
                <textarea rows="3" cols="20" name="seguimiento">{{ $segCondicion->seguimiento ?? '' }}</textarea>
            </div>
            <div class="mb-2 mt-3 container">
                <label for="txtfechan" class="col-sm-2 col-form-label">fecha</label>
                <input type="text" name="fecha" value="{{ $segCondicion->fecha ?? '' }}" class="form-control">
            </div>
            <div class="mb-5 mt-5 container">
                <button type="submit" class="btn btn-success btn-sm">{{ $segCondicion ? 'Editar' : 'Registrar' }}
                </button>
                <a href="{{ route('seguimiento.mascotas.control', ['idMascota' => $mascota->id_mascota]) }}"
                    class="btn btn-primary btn-sm">Regresar</a>
            </div>
            
        </form>
        
    </div>

</body>

</html>
