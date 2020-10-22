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

    public function userDataImg() {
        return $this->hasOneThrough('UserImage', 'UserData', 'user_id', 'userData_id', 'id', 'id');
    }

    public function userPermission() {
        return $this->hasOne('UserPermission', 'user_id');
    }
}
