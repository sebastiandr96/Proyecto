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
    <title>Document</title>
</head>


<body>

    <nav class="navbar navbar-expand-sm bg-success navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Seguimiento mascotas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Seguimiento control</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Reporte</a>
                </li>
            </ul>
        </div>
    </nav>
    <h1 class="text-center">Seguimiento Mascota</h1>
    <div class="container mt-5">
       
        @foreach ($segConsultas as $consulta)
         Nombre Mascota: <td>{{ $consulta->segmascota->nombre }}</td>
       @endforeach
        
        <table class="table table-hover table-bordered table-sm mt-5">
            <tr>
                <th>Condicion</th>
                <th>seguimeinto</th>
                <th>fecha</th>
                
            @foreach ($segConsultas as $consulta)
                <tr>
                 
                    <td>{{ $consulta->condicion }}</td>
                    <td>{{ $consulta->seguimiento }}</td>
                    <td>{{ $consulta->fecha }}</td>
                    <td><a href="{{ route('seguimiento.mascotas.index', ['idMascota' => $mascota->id_mascota, 'idCondicion' => $consulta->id_condicion]) }}"
                            class="btn btn-primary btn-sm">editar</a>
                    </td>
                    <td><a href="{{ route('seguimiento.mascotas.index', ['idMascota' => $mascota->id_mascota]) }}"
                            class="btn btn-primary btn-sm">Crear</a></td>
                </tr>
    
              
         
            @endforeach
            <div class="container mt-5">
            <a href="{{ route('mostrar.mascotas', ['idUsuario' => $mascota->id_usuario]) }}"
                class="btn btn-primary btn-sm">Regresar</a>
                <a href="{{ route('seguimiento.mascotas.index', ['idMascota' => $mascota->id_mascota]) }}"
                    class="btn btn-primary btn-sm">Crear</a></td>
                </div>

        </table>
    </div>
   



</body>


</html>
