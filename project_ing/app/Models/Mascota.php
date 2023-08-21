<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id_mascota
 * @property string $nombre
 * @property string $raza
 * @property string $peso
 * @property string $edad
 * @property int $tipo_alimento
 * @property int $id_usuario
 */

class Mascota extends Model
{

    protected $table = 'mascotas';
    protected $primaryKey = 'id_mascota';
    protected $guarded = [];

    public function editar(array $atributoss)
    {
        $this->update($atributoss);
    }



    public function mascota(array $atributoss) : Mascota
    {
        $datoss = [
            'nombre' => $atributoss['nombre'],
            'raza' => $atributoss['raza'],
            'color' => $atributoss['color'],
            'peso' => $atributoss['peso'],
            'edad' => $atributoss['edad'],
            'tipo_alimento' => $atributoss['tipo_alimento'],
        ];
        return $this->mascotas()->create($datoss);

    }

    public function segComida(): BelongsTo
    {
        return $this->belongsTo(Comida::class, 'tipo_alimento', 'id_alimento');
    }

}
