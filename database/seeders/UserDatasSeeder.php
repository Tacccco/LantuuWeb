<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserData;

class UserDatasSeeder extends Seeder
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
            'lastName' => 'dsalgj',
            'firstName' => 'dlskgj',
            'age' => 22,
            'sex' => 'female',
            'phoneNumber' => '99112233',
            'reserveNumber' => '99112244',
            'occupation' => 'Оюутан',
            'citizenship' => 'Улаанбаатар',
        ]);

        UserData::create([
            'id' => 2,
            'lastName' => 'dkjfalksd',
            'firstName' => 'sdlakgjs',
            'age' => 22,
            'sex' => 'male',
            'phoneNumber' => '99111445',
            'reserveNumber' => '99778541',
            'occupation' => 'dksjafls',
            'citizenship' => 'dgakljsdgkl',
        ]);

    }
}
