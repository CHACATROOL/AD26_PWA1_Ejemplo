<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    /** @use HasFactory<\Database\Factories\RecetaFactory> */
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'user_id',
        'titulo',
        'descripcion',
        'ingredientes',
        'instrucciones',
        'imagen',
    ];

    public function categoria()
    {
        // Relacion de muchos a uno con el modelo Categoria
        return $this->belongsTo(Categoria::class);
    }
    public function etiquetas()
    {
        // Relacion de muchos a muchos con el modelo Etiqueta
        return $this->belongsToMany(Etiqueta::class);
    }
    public function user()
    {
        // Relacion de muchos a uno con el modelo User
        return $this->belongsTo(User::class);
    }
}