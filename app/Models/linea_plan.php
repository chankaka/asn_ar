<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class linea_plan extends Model
{
    use HasFactory;
    protected $fillable = ['id_plan','lp_SKU','lp_descripcion','lp_pcb','lp_cantidad'];
}
