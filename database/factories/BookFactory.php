<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class BookFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Book::class;



    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() //sahte data eklemek için
    {
        return [
            'name' => $this->faker->name(),
            'image' => null,
            'writer_id' => $this->faker->numberBetween(1, 2),
            'genre_id' => $this->faker->numberBetween(1, 2),
            'created_at' => now(),
        ];
    }
}
