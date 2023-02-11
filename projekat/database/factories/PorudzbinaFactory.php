<?php

namespace Database\Factories;

use App\Models\Porudzbina;
use App\Models\Proizvod;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PorudzbinaFactory extends Factory
{
    protected $model=Porudzbina::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'proizvod_id'=>Proizvod::factory(),
            'user_id'=>User::factory(),
        ];
    }
}
