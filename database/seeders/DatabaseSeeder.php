<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Create a user
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'Admin@example.com',
            'username' => 'Admin',
            'password' => bcrypt('adminuser123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $user_id = DB::getPdo()->lastInsertId();

        // Create 10 quizzes for the user
        for ($i = 0; $i < 10; $i++) {
            DB::table('quizzes')->insert([
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph(3),
                'user_id' => $user_id,
                'image' => 'https://i0.wp.com/risevisible.com/wp-content/uploads/2022/08/midjourney-art-Oli_beaugrand.jpg?fit=1800%2C798&ssl=1',
                'created_at' => now(),
                'updated_at' => now()
            ]);

            $quiz_id = DB::getPdo()->lastInsertId();

            // Create 10 questions for each quiz
            for ($j = 0; $j < 10; $j++) {
                $answers = [
                    ["text" => "Hello"],
                    ["text" => "World"],
                    ["text" => "This is PHP"],
                    ["text" => "Laravel"]
                ];

                DB::table('questions')->insert([
                    'question' => $faker->sentence(5),
                    'answers' => json_encode($answers),
                    'image' => 'https://i0.wp.com/risevisible.com/wp-content/uploads/2022/08/midjourney-art-Oli_beaugrand.jpg?fit=1800%2C798&ssl=1',
                    'position' => $j,
                    'quiz_id' => $quiz_id,
                    'user_id' => $user_id,
                    'correct_answer' => $answers[0]['text'],
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }
}
