<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    public function proyectos (){
        return $this->belongsToMany('App\Models\Proyecto');
        }

        public function colaborador (){
            return $this->belongsTo('App\Models\Colaborador');
            }

            public function tipo_pago (){
                return $this->belongsTo('App\Models\Tipo_pago');
                }

}
