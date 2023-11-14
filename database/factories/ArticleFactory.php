<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $text = fake()->text(250);

        while (strlen($text) < 200) {
            $text = fake()->text(250);

        }
        $time = fake()->dateTimeBetween('2020-01-01 13:11:59','2022-01-01 13:11:59');

        return
            [
                'image' => 'https://mountain.nsu.ru/nas_tour/Altay2016.05/photos/hi-res/IMG_33857.JPG',
                'title' => fake()->unique()->jobTitle(),
                'text' => $text,
                'counter_likes' => rand(500, 1000),
                'counter_views' => rand(500, 1000),
                'created_at' =>  $time,
                'updated_at' =>  $time
            ];
    }
}
