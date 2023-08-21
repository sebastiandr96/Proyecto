<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Mix;

/**
 * @property int $id_mascota
 * @property string $nombre
 * @property string $raza
 * @property int $edad
 * @property string $color
 * @property string $peso
 * @property int $tipo_alimento
 * @property int $id_usuario
 * @property string $imagen
 */

class SegMascota extends Model
{
    protected $table = 'mascotas';
    protected $primaryKey = 'id_mascota';

    public function segCondiciones(): HasMany
    {
        return $this->hasMany(SegCondicion::class, 'id_mascota', 'id_mascota');
    }




    public function mascotas(): HasMany
    {
        return $this->hasMany(Mascota::class, 'id_usuario', 'id_usuario');
    }

    /**
     * crea un seguimiento para una mascota
     *
     * @param array $atributos
     *
     * @return SegCondicion
     *
     */
    public function crearSegCondicion(array $atributos): SegCondicion
    {
        $datos = [
            'condicion' => $atributos['condicion'],
            'seguimiento' => $atributos['seguimiento'],
            'fecha' => $atributos['fecha'],
        ];

        return $this->segCondiciones()->create($datos);

    }

    

 
}
