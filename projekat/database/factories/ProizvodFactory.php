<?php

namespace Database\Factories;

use App\Models\Prodavnica;
use App\Models\Proizvod;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProizvodFactory extends Factory
{
    protected $model=Proizvod::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv'=>$this->faker->name(),
            'cena'=>$this->faker->numberBetween($int1=250,$int2=1000),
            'opis'=>$this->faker->text(),
            'prodavnica_id'=>Prodavnica::factory(),
        ];
    }
}
