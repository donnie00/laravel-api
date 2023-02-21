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
        $techs = [
            [
                'name' => 'laravel',
                'icon' => 'fa-laravel',
            ],
            [
                'name' => 'html',
                'icon' => 'fa-html5',
            ],
            [
                'name' => 'css',
                'icon' => 'fa-css3',
            ],
            [
                'name' => 'javaScript',
                'icon' => 'fa-js',
            ],
            [
                'name' => 'vue',
                'icon' => 'fa-vuejs',
            ]
        ];

        foreach ($techs as $tech) {
            $technology = new Technology();

            $technology->name = $tech['name'];
            $technology->icon = $tech['icon'];

            $technology->save();
        }
    }
}
