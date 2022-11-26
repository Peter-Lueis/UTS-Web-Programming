<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'publisher_id' => fake()->numberBetween(1,5),
            'title' => fake()->name(),
            'author' => fake()->name(),
            'year' => 2000,
            'sypnosis' => fake()->paragraph(),
            'image' => 'https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2014/7/30/1406719264487/fd90e162-93de-41b1-aea5-f8e49227e85b-1360x2040.jpeg?w=1200&q=55&auto=format&usm=12&fit=max&s=6aec5983026d71051e0abf881c79ab6f',
        ];
    }
}
