<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitaServicio extends Model
{
    /** @use HasFactory<\Database\Factories\CitaServicioFactory> */
    use HasFactory;

    protected $fillable = [
        'citaid',
        'servicioid',
    ];
}
