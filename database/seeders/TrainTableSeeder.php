<?php

namespace Database\Seeders;

use Faker\Generator;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = config('trains_data.train');
        
        foreach ($trains as $train) {
            $new_train = new Train();
            $new_train->azienda = $train['azienda']; 
            
        };
    }
}
