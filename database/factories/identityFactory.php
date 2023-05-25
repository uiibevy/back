<?php

namespace Database\Factories;

use App\Models\identity;
use Illuminate\Database\Eloquent\Factories\Factory;

class identityFactory extends Factory
{
    protected $model = identity::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
        ];
    }
}
