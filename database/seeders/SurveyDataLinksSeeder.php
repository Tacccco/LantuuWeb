<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SurveyDataLink;

class SurveyDataLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SurveyDataLink::create([
            'id' => 1,
            'links' => 'q',
            'surveyData_id' => 1,
        ]);

        SurveyDataLink::create([
            'id' => 2,
            'links' => 'w',
            'surveyData_id' => 2,
        ]);

        SurveyDataLink::create([
            'id' => 3,
            'links' => 'e',
            'surveyData_id' => 3,
        ]);

        SurveyDataLink::create([
            'id' => 4,
            'links' => 'r',
            'surveyData_id' => 4,
        ]);
    }
}
