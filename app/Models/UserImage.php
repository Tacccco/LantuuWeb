<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserImage extends Model
{
    use HasFactory;

    public function userData() {
        return $this->belongsTo('App\Models\UserData', 'userData_id');
    }
}
