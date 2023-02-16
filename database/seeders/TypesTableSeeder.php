<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Faker\Generator as Faker;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Front-end', 'Back-end', 'Api', 'Full-stack'];

        foreach ($types as $typeName) {

            $type = new Type();

            $type->name = $typeName;

            $type->save();
        }
    }
}
