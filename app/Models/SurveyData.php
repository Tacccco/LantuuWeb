<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyData extends Model
{
    use HasFactory;

    public function surveyLink() {
        return $this->hasOne('SurveyDataLink', 'surveyData_id');
    }

    public function season() {
        return $this->belongsTo('SurveySeason', 'season_id');
    }
}
