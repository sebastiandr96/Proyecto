<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id_alimento
 * @property string $categoria
 * @property string $Marca
 */

class Comida extends Model
{

    protected $table = 'tipo_alimento';
    protected $primaryKey = 'id_alimento';
    protected $guarded = [];

    public function editar(array $atributoss)
    {
        $this->update($atributoss);
    }



    public function alimento(array $atributoss) : Comida
    {
        $datoss = [
            'categoria' => $atributoss['categoria'],
            'marca' => $atributoss['marca'],
          
        ];
        return $this->mascotas()->create($datoss);

    }
}
