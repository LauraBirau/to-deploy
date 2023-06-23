<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Foo>
 */
class FooFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(50),
            'email' =>$this->faker->email,
            'thud' => $this->faker->numberBetween('0', '10000'),
            'wombat' => $this->faker->boolean(),
        ];
    }
}
