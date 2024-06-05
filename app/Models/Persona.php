<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    public function accidentes(){
        return $this->hasMany('App\Models\Accidente');
    }

    public function vehiculos(){
        return $this->belongsToMany('App\Models\Vehiculo');
    }
}
