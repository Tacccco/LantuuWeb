<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\User;
use App\Models\UserData;
use App\Models\UserPermission;
use App\Models\UserImage;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserData::create([
            'id' => 1,
            'firstName' => 'dsgasd',
            'lastName' => 'dgasdg',
            'age' => 21,
            'sex' => 'male',
            'phoneNumber' => '45781245',
            'reserveNumber' => '12345678',
            'occupation' => 'dlkgads',
            'citizenship' => 'dsdgasdg',
        ]);

        User::create([
            'id' => 1,
            'email' => 'amigo@gmail.com',
            'password' => bcrypt('123456'),
            'userData_id' => 1,
        ]);

        UserPermission::create([
            'id' => 1,
            'access' => 'manager',
            'user_id' => 1,
        ]);

        UserImage::create([
            'id' => 1,
            'profileImage' => 'dsagsdha',
            'userData_id' => 1,
        ]);
        
        Admin::create([
            'id' => 1,
            'login' => 'admin',
            'password'=> bcrypt('admin'),
            'email' => 'admin@gmail.com',
        ]);
    }
}
