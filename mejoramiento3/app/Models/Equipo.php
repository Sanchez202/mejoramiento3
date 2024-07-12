<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    public function presidente (){
        return $this->hasOne('App\Models\Presidente');
        }
        public function jugadores (){
            return $this->hasMany('App\Models\Jugador');
            }

            public function partidos (){
                return $this->BelongsToMany('App\Models\Partido');
                }
  
}