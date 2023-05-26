<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use SoftDeletes;
    use HasFactory;

    function getRole(){
        return $this->hasOne('App\Models\Role','id','role_id');
    }
}
