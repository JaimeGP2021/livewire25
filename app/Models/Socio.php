<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    /** @use HasFactory<\Database\Factories\SocioFactory> */
    use HasFactory;

    protected $fillable = ['codigo', 'nombre'];

}
