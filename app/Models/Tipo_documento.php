<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_documento extends Model
{
    use HasFactory;
	protected $table = 'tipo_documentos';
    protected $primaryKey='codigo_documento';
    protected $fillable=[
    'codigo_documento',
    'descripcion',
    'estado',
    ];
}
