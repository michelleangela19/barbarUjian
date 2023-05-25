<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Detail; //USE MODEL JANGAN LUPA!
use Faker\Factory as Faker; //KLO PAKE FAKER JANGAN LUPA


class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("id_ID");

        for($i = 1; $i < 11; $i++){
            Detail::create([
                "book_id" => $i,
                // "book_id" => "B".$i, ->misal ada formatnya ID nya string
                "author" => $faker->name(),
                "publisher" =>$faker->company(),
                "year" =>$faker->year(),
                "description" =>$faker->paragraph(),
            ]);
        }
    }
}
