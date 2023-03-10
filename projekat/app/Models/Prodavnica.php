<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodavnica extends Model
{
    use HasFactory;

    protected $fillable=[
        'naziv',
        'adresa',
        'brojTelefona'
    ];

    public function proizvodi(){
        return $this->hasMany(Proizvod::class);
    }
}
