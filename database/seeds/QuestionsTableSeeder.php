<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
use App\Question as Question;
use App\User as User;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the question seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $users = User::all()->lists('id')->all();

        foreach (range(1, 20) as $index) {
            Question::create([
                'user_id' => $faker->randomElement($users),
                'title' => $faker->sentence(10),
                'body' => $faker->paragraph(5)
            ]);
        }
    }
}