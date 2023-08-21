<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id_usuario
 * @property string $nombres
 * @property string $apellidos
 * @property string $correo
 * @property string $contraseña
 
 */

class usuario extends Model
{

    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $guarded = [];

    public function editar(array $atributoss)
    {
        $this->update($atributoss);
    }


    public function mascotas(): HasMany
    {
        return $this->hasMany(Mascota::class, 'id_usuario', 'id_usuario');
    }

   
}
