@extends('layouts/plantilla')
@section('title', 'segimienyto')
@section('contenido')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
    </head>

    <body>
        <a href="{{ route('seguimiento.mascotas.control', ['idMascota' => 1]) }}">Seguimiento Mascota</a>

        <table class="table table-hover table-bordered table-sm mt-5">
            <tr>
                <th>nombre</th>
                <th>raza</th>
                <th>edad</th>
                <th>color</th>
                <th>peso</th>
                <th>marca</th>
                <th>categoria</th>
            </tr>
           
	 @foreach ($mascotas as $mascota)
     <tr>
     
         <td>{{ $mascota->nombre }}</td>
         <td>{{ $mascota->raza }}</td>
         <td>{{ $mascota->edad }}</td>
         <td>{{ $mascota->color }}</td>
         <td>{{ $mascota->peso }}</td>
         <td>{{ $mascota->segComida->marca }}</td>
         <td>{{ $mascota->segComida->categoria }}</td>
     </tr>
         
    
    
    @endforeach
        
 
        </table>

    </body>



    </html>