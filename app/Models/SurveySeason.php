<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveySeason extends Model
{
    use HasFactory;

    public function surveyDatas() {
        return $this->hasMany('App\Models\SurveyData', 'season_id');
    }
}
