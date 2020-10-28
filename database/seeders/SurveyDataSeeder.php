<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SurveyData;
use App\Models\SurveyDataLink;

class SurveyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SurveyData::create([
            'id' => 1,
            'lastName' => 'ADlkjflskd',
            'firstName' => 'dlafjs',
            'age' => 25,
            'sex' => 'asfa',
            'occupation' => 'dkajkfklds',
            'citizenship' => 'dlskagg',
            'phoneNumber' => '12345678',
            'reserveNumber' => '12345678',
            'email' => 'jsadfla@dslka.com',
            'facebookAddress' => 'sdalkfdg',
            'interest' => 'ldkjasldkjfa',
            'activity' => 'sdalkjfalskjdga',
            'selfExpectation' => 'lkjaflskdjgalksdg',
            'volunteering' => 'lksdlskdgjaldsg',
            'advantage' => 'dakjsdgasdgadsh',
            'disadvantage' => 'dslkajasldkgja',
            'purpose' => 'dklasjdgsalsg',
        ]);

        SurveyData::create([
            'id' => 2,
            'lastName' => 'ADlkjfdsgalskd',
            'firstName' => 'gkae',
            'age' => 21,
            'sex' => 'male',
            'occupation' => 'dsalkjadsajkfklds',
            'citizenship' => 'dlsdksga',
            'phoneNumber' => '12345568',
            'reserveNumber' => '12356678',
            'email' => 'jsadfla@ddsk.com',
            'facebookAddress' => 'sgkljgkfdg',
            'interest' => 'ldkjasfkjaeg',
            'activity' => 'sdalkjffekljag',
            'selfExpectation' => 'lklkgjskdjgalksdg',
            'volunteering' => 'lksdlfewakjaldsg',
            'advantage' => 'dakjsfekajgdsh',
            'disadvantage' => 'dsfvsdkljsldkgja',
            'purpose' => 'dklasjddlksj',
        ]);

        SurveyDataLink::create([
            'id' => 1,
            'links' => 'dsk654es5af5465657w51631w5',
            'surveyData_id' => 1,
        ]);
    }
}
