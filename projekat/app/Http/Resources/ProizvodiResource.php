<?php

namespace App\Http\Resources;

use App\Models\Prodavnica;
use Illuminate\Http\Resources\Json\JsonResource;

class ProizvodiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public static $wrap='proizvodi';
    
    public function toArray($request)
    {
        return [
            'id'=>$this->resource->id,
            'naziv'=>$this->resource->naziv,
            'cena'=>$this->resource->cena,
            'opis'=>$this->resource->opis,
            'prodavnica'=>$this->resource->prodavnica,
        ];
    }
}
