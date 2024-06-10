<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'precio',
        'imagen_url',
        'descripcion',
        'tamano_id',
        'categoria_id',
        'descuento_id'
    ];

    public function categoria()
{
    return $this->belongsTo(Categoria::class, 'categoria_id');
}
public function tamano()
{
    return $this->belongsTo(Tamano::class, 'tamano_id');
}
public function descuento()
{
    return $this->belongsTo(Descuento::class, 'descuento_id');
}
}
