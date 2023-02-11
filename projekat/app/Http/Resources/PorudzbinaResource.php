<?php

namespace App\Http\Resources;

use App\Http\Controllers\ProizvodiController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Resources\Json\JsonResource;

class PorudzbinaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap='porudzbine';
    public function toArray($request)
    {
        return [
            'id'=>$this->resource->id,
            'proizvod'=>new ProizvodiResource($this->resource->proizvod),
            'kupac'=>new UserResource($this->resource->user),
        ];
    }
}
