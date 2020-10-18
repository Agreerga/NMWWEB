<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class TwitterTrace extends Model
{
    protected $table = 'nmw_web_twitter_trace';
    const CREATED_AT = null;  //不讓laravel ORM自動去更新CREATED_AT欄位
    const UPDATED_AT = null;  //不讓laravel ORM自動去更新UPDATED_AT欄位
}
