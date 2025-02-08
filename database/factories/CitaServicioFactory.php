<?php

namespace Database\Factories;

use App\Models\Cita;
use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CitaServicio>
 */
class CitaServicioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'citaid' => Cita::factory(),
            'servicioid' => Servicio::factory(),
        ];
    }
}
