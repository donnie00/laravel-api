<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $techs = ['laravel', 'html', 'css', 'javaScript', 'vue'];

        foreach ($techs as $tech) {
            $technology = new Technology();

            $technology->name = $tech;

            $technology->save();
        }
    }
}
