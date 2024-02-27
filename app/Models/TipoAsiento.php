<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAsiento extends Model
{
    use HasFactory;
    public $table = 'tipo_asiento';
     public $timestamps = false;

     public $primaryKey  = 'idTipoAsiento';
    
}
