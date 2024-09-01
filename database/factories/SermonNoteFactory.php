<?php

namespace Database\Factories;
use App\Models\Sermon;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SermonNoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'notes' => fake()->paragraph(),
            'sermon_id' =>Sermon::get()->shuffle()->first()->id,
            'written_by'=>User::get()->shuffle()->first()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
