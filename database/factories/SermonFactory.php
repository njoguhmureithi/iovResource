<?php

namespace Database\Factories;

use App\Models\SermonCategory;
use App\Models\SermonSerie;
use App\Models\Speaker;
use App\Models\User;
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
        $type = ['audio', 'video'];
        $audio = "http://127.0.0.1:8000/audio/nightfall-future-bass-music-228100.mp3";
        $video = "https://www.youtube.com/watch?v=pS__ttyHIJw&list=RDpS__ttyHIJw&start_radio=1";
        $sermon_content = "";

        $sermon_type = $type[array_rand($type)];
        if($sermon_type == 'audio'){
            $sermon_content = $audio;
        } else {
            $sermon_content = $video;
        }

        return [
            'title' => fake()->sentence(),
            'speaker_id' => Speaker::get()->shuffle()->first()->id,
            'sermon_category_id' => SermonCategory::get()->shuffle()->first()->id,
            'type' => $sermon_type,
            'sermon_content' =>  $sermon_content,
            'sermon_series_id'=>SermonSerie::get()->shuffle()->first()->id,
            'cover_image' => "http://127.0.0.1:8000/img/bg-img/" . rand(1, 77). ".jpg",
            'uploaded_by' => User::get()->shuffle()->first()->id,
            'uploaded_at' => now(),
        ];
    }
}
