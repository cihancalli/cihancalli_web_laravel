<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class FcmUser extends Model
{
    use SoftDeletes;
    use HasFactory;

    function getUser(){
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
