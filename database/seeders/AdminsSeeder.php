<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'id' => 1,
            'login' => 'admin',
            'password' => bcrypt('admin'),
            'email' => 'admin@gmail.com',
        ]);
    }
}
