<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CommentFactory extends Factory
{


        /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() //sahte data eklemek için
    {
        return [
            'description' => $this->faker->paragraph(2),
            'book_id' => $this->faker->numberBetween(1, 10), //can be changed by calling the book factory..
            'user_id' => $this->faker->numberBetween(1, 3),
            'created_at' => now(),
        ];
    }
}
