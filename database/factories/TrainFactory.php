<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "azienda" => fake()->company,
            "stazione_di_partenza" => fake()->city(),
            "stazione_di_arrivo" => fake()->city(),
            "orario_di_partenza" => Carbon::now()->addHours(rand(0, 13)),
            "orario_di_arrivo" => Carbon::now()->addHours(rand(13, 24)),
            "codice_treno" => Str::random(7),
            "numero_carrozze" => random_int(1, 20),
            "in_orario" => fake()->boolean,
            "cancellato" => fake()->boolean,
        ];
    }
}
