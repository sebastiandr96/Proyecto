<?php

namespace App\Http\Controllers\Seguimiento;

use App\Http\Controllers\Controller;
use App\Models\Mascota;
use App\Models\SegCondicion;
use App\Models\SegMascota;
use App\Models\usuario;
use Illuminate\Http\Request;

class CondicionController extends Controller
{
    public function index($idMascota, int $idCondicion = 0)
    {
        $mascota = SegMascota::query()->find($idMascota);
        $segCondicion = SegCondicion::query()->find($idCondicion);

        return view('Seguimiento.segcondicion', ['mascota' => $mascota, 'segCondicion' => $segCondicion]);
    }

    public function store(Request $request)
    {
        $datos = $request->all();
        $mascota = SegMascota::query()->find($datos['id_mascota']);

        if ($datos['id_condicion'] === null) {

            $segCondicion = $mascota->crearSegCondicion($datos);
            
            return redirect()->route('seguimiento.mascotas.control', ['idMascota' => $mascota->id_mascota]);
            
        } else {
           
            $segCondicion = SegCondicion::find($datos['id_condicion']);
           
            $segCondicion->editar([
                'condicion' => $datos['condicion'],
                'seguimiento' => $datos['seguimiento'],
                'fecha' => $datos['fecha'],
            ]);
      
        }
        return redirect()->back()->withInput(['mascota' => $mascota, 'segCondicion' => $segCondicion]);
    }

    public function consulta($idMascota)
    {

        $mascota = SegMascota::query()->find($idMascota,);
        $segConsultas = $mascota->segCondiciones;   
        return view('Seguimiento.seguimiento', ['mascota' => $mascota, 'segConsultas' => $segConsultas]);
    }
    
    public function mostarMascotas($idUsuario)
    {
        $usuario = Usuario::query()->find($idUsuario);         
        $mascotas = $usuario->mascotas;
        return view('MotrarMascotas',['mascotas' => $mascotas]);

    }

}
