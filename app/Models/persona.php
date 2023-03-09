<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
	protected $table = 'personas';
    protected $primaryKey='codigo_persona';
    protected $fillable=[
    'codigo_persona',
    'nombre',
    'apellido_paterno',
    'apellido_materno',
    'codigo_documento',
    'numero_documento',
    'estado',
    ];
}
