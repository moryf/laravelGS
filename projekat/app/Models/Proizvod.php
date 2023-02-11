<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proizvod extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'cena',
        'opis',
        'prodavnica_id',
    ];


    public function prodavnica(){
        return $this->belongsTo(Prodavnica::class);
    }

    public function porudzbine(){
        return $this->hasMany(Porudzbina::class);
    }
}
