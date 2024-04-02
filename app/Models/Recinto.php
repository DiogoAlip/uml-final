<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Recinto extends Model
{
    protected $fillable = [
        'nombre',
        'capacidad',
    ];

    public function especies()
    {
        return $this->hasMany('App\Models\Especie','recinto_id');
    }

    public function animals()
    {
        return $this->hasMany('App\Models\Animal','recinto_id');
    }
}
