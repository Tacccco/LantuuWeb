<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;

    protected $hidden = [
        'password',
    ];

    public function userData() {
        return $this->belongsTo('App\Models\UserData', 'userData_id');
    }

    public function userPermission() {
        return $this->hasOne('App\Models\UserPermission', 'user_id');
    }

    public function userLoginCreateLink() {
        return $this->hasOne('App\Models\UserLoginLink', 'user_id');
    }

    public function userPost()
    {
        return $this->hasMany('App\Models\Posts', 'user_id');
    }
}
