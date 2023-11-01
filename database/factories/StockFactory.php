<?php

namespace Database\Factories;

use App\Models\TypeRegister;
use Illuminate\Database\Eloquent\Factories\Factory;
use FakerEcommerce\Ecommerce;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stock>
 */
class StockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->sentence(),
            'price' => $this->faker->randomNumber(2),
            'amount' => $this->faker->randomNumber(2),
            'description' => $this->faker->paragraph(),
            'id_typeRegister' => TypeRegister::pluck('id')->random()
        ];
    }
}
