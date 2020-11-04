<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'email' => 'athenda.mng@gmail.com',
            'password' => bcrypt('123456'),
            'userData_id' => 1,
        ]);

        User::create([
            'id' => 2,
            'email' => 'bazraabazraa648@gmail.com',
            'password' => bcrypt('123456'),
            'userData_id' => 2,
        ]);
    }
}
