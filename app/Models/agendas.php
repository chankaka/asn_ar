<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agendas extends Model
{
    use HasFactory;
    protected $fillable = ['id_plan','id_hora','a_fecha','status'];

}
