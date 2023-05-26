<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    use HasFactory;

    public function postCount(){
        return $this->hasMany('App\Models\Post','category_id','id')->count();
    }
    public function postTrashedCount(){
        return $this->hasMany('App\Models\Post','category_id','id')->onlyTrashed()->count();
    }
    public function postPublishedCount(){
        return $this->hasMany('App\Models\Post','category_id','id')->where('published',1)->count();
    }
}
