<?php

namespace Database\Factories;

use App\Models\Prodavnica;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdavnicaFactory extends Factory
{
    protected $model=Prodavnica::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv'=>$this->faker->name(),
            'adresa'=>$this->faker->address(),
            'brojTelefona'=>$this->faker->phoneNumber(),
        ];
    }
}
