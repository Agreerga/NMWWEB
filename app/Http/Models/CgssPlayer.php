<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class CgssPlayer extends Model
{
    protected $table = 'cgss_player';
    const CREATED_AT = null;  //不讓laravel ORM自動去更新CREATED_AT欄位
    const UPDATED_AT = null;  //不讓laravel ORM自動去更新UPDATED_AT欄位
}
