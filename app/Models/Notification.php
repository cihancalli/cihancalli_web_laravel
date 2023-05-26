<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use SoftDeletes;
    use HasFactory;

    function getFmcUser(){
        return $this->hasOne('App\Models\FcmUser','id','fcm_user_id');
    }
}
