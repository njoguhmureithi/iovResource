<?php

namespace Database\Seeders;

use App\Models\SermonCategory;
use App\Models\SermonSerie;
use App\Models\Speaker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SermonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $series = ['All In', 'Man Enough', 'Purity and Purpose', 'Love Triangle'];
        SermonSerie::truncate();
        foreach($series as $serie){
            SermonSerie::create([
                'name' => $serie,
                'start_date' => now(),
                'finish_date' => '2024-10-31'
            ]);
        }

        $categories = ['Prayer', 'Worship', 'Forgiveness', 'Compassion', 'Giving', 'Love'];
        SermonCategory::truncate();
        foreach($categories as $category){
            SermonCategory::create([
                'name' => $category,
            ]);
        }

        $speakers = [
            ['name' => 'joshua',
             'designation' => 'guitarist',
             'organization' => 'ndc'],
             ['name' => 'Dennis',
             'designation' => 'keyboardist',
             'organization' => 'mamlaka hill']
        ];
        Speaker::truncate();
        foreach($speakers as $speaker){
            Speaker::create($speaker);
        };


        
    }
}
