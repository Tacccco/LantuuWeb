<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyDataLink extends Model
{
    use HasFactory;

    public function surveyData() {
        return $this->belongsTo('App\Models\SurveyData', 'surveyData_id');
    }
}
