<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SurveyData;

class SurveyDatasSeeder extends Seeder
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

        SurveyData::create([
            'id' => 3,
            'lastName' => 'Өлзийсүрэн',
            'firstName' => 'Базарсад',
            'age' => 21,
            'sex' => 'male',
            'occupation' => 'Оюутан',
            'citizenship' => 'Улаанбаатар',
            'phoneNumber' => '99112233',
            'reserveNumber' => '12356678',
            'email' => 'bazraabazraa648@gmail.com',
            'facebookAddress' => 'https://www.facebook.com/bazarsad.ulziisuren',
            'interest' => 'Хүнд туслах',
            'activity' => 'Хүнд туслах',
            'selfExpectation' => 'Хүнд туслах',
            'volunteering' => 'Хүнд туслах',
            'advantage' => 'Хүнд туслах',
            'disadvantage' => 'Хүнд туслах',
            'purpose' => 'Хүнд туслах',
        ]);

        SurveyData::create([
            'id' => 4,
            'lastName' => 'Мэндбаяр',
            'firstName' => 'Баасанбаяр',
            'age' => 22,
            'sex' => 'male',
            'occupation' => 'Оюутан',
            'citizenship' => 'Дархан',
            'phoneNumber' => '99112233',
            'reserveNumber' => '12356678',
            'email' => 'athenda.mng@gmail.com',
            'facebookAddress' => 'https://www.facebook.com/profile.php?id=100009969307872',
            'interest' => 'Веб хөгжүүлэх',
            'activity' => 'Веб хөгжүүлэх',
            'selfExpectation' => 'Веб хөгжүүлэх',
            'volunteering' => 'Веб хөгжүүлэх',
            'advantage' => 'Веб хөгжүүлэх',
            'disadvantage' => 'Веб хөгжүүлэх',
            'purpose' => 'Веб хөгжүүлэх',
        ]);

    }
}
