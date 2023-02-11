<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porudzbina extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_proizvoda',
        'id_kupca',
    ];
    
    public function proizvod(){
        return $this->belongsTo(Proizvod::class);
    }
    public function kupac(){
        return $this->belongsTo(User::class);
    }
}
