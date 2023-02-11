<?php

namespace Database\Seeders;

use App\Models\Porudzbina;
use App\Models\Prodavnica;
use App\Models\Proizvod;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Porudzbina::factory(10)->create();

        $user=User::factory()->create();
        $prodavnica1=Prodavnica::factory()->create();
        $proizvod1=Proizvod::factory()->create([
            'prodavnica_id'=>$prodavnica1->id,
        ]);
        $proizvod1=Proizvod::factory()->create([
            'prodavnica_id'=>$prodavnica1->id,
        ]);
        Porudzbina::factory(5)->create([
           'proizvod_id'=>$proizvod1->id, 
        ]);
    }
}
