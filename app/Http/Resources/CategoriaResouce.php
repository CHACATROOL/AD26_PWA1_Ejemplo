<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoriaResouce extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'tipo' => 'categoria',
            'attributes' => [
                'nombre' => $this->nombre,
            ],
            'relaciones' => [
                'recetas' => $this->recetas,
            ],
        ];
    }
}
