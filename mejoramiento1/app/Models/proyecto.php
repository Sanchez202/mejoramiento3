<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    use HasFactory;

    public function cliente (){
        return $this->belongsTo('App\Models\Cliente');
        }
        public function colaboradores (){
            return $this->belongsToMany('App\Models\Colaborador');
            }
}