<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Michelle Angela",
            "grade" => "1"
        ]);

        User::create([
            "name" => "Angela Michelle",
            "grade" => "3"
        ]);
    }
}
