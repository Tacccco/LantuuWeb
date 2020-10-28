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
        return $this->belongsTo('UserData', 'userData_id');
    }

    public function userPermission() {
        return $this->hasOne('UserPermission', 'user_id');
    }
}
