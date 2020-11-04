<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminsSeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(CommentsSeeder::class);
        $this->call(SurveyDatasSeeder::class);
        $this->call(SurveyDataLinksSeeder::class);
        $this->call(UserDatasSeeder::class);
        $this->call(UsersLoginLinksSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
