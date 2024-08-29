<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sermon>
 */
class SermonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->name(),
            'speaker_id' =>fake()->name(),
            'sermon_category_id' =>fake()->name(),
            'sermon_series_id'=>fake()->name(),
            'cover_image' =>fake(,
            'speaker_id' =>fake()->name(),
        ];
    }
}
