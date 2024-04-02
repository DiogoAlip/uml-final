<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Cuidador extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'edad',
        'telefono',
        'especialidad',
    ];

    public function animals()
    {
        return $this->hasMany('App\Models\Animal','cuidador_id');
    }
}
