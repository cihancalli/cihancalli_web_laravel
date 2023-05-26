<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    use HasFactory;

    //ublic $timestamps = false;
    //protected $fillable = ['published_at'];

    function getCategory(){
        return $this->hasOne('App\Models\Category','id','category_id');
    }
}
