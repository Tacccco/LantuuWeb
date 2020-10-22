<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;

    public function userImg() {
        return $this->hasOne('UserImage', 'userData_id');
    }

    public function user() {
        return $this->belongsTo('User');
    }
}
