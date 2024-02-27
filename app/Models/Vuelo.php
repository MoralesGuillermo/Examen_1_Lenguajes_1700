<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;

    public $table = 'vuelos';
    public $timestamps = false;

    public $primaryKey = 'numeroVuelo';
}
