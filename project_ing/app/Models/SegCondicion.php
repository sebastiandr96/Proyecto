<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property Carbon $fecha
 * @property string $condicion
 * @property string $seguimiento
 * @property int $id_mascota
 */

class SegCondicion extends Model
{

    protected $table = 'seg_condicion';
    protected $primaryKey = 'id_condicion';
    protected $guarded = [];

    public function editar(array $atributos)
    {
        $this->update($atributos);
    }


    
    public function segmascota(): BelongsTo
    {
        return $this->belongsTo(Mascota::class, 'id_mascota', 'id_mascota');
    }
}
