<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User as User;
use App\Question as Question;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('questions')->delete();
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);

        Model::reguard();
    }
}
