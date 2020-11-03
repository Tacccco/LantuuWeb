<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyData extends Model
{
    use HasFactory;

    public function surveyLink() {
        return $this->hasOne('App\Models\SurveyDataLink', 'surveyData_id');
    }

    public function season() {
        return $this->belongsTo('App\Models\SurveySeason', 'season_id');
    }
}
