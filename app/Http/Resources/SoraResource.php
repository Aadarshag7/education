<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SoraResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
         'id'=>$this->id,
         'name'=>$this->name,
         'age'=>$this->age,
         'created_at'=>$this->created_at->toDateString(),
         'price'=>'yoyo'
        ];
    }
}
