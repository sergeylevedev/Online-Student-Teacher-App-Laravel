<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
use App\User as User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the User seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        User::create([
            'username' => 'admin',
            'password' => bcrypt('password'),
            'email' => 'admin@example.com'
        ]);

        foreach (range(1, 20) as $index) {
            User::create([
                'username' => $faker->userName(),
                'password' => bcrypt($faker->password()),
                'email' => $faker->email()
            ]);
        }
    }
}