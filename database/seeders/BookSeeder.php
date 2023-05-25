<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //KLO PAKE FAKER JANGAN LUPA
use App\Models\Book; //USE MODEL JANGAN LUPA!

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("id_ID");

        for($i = 0; $i < 10; $i++){
            Book::create([
                "category_id" => mt_rand(1,4),
                "title" => $faker->sentence(),
            ]);
        }
    }
}
