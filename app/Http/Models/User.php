<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    const CREATED_AT = null;  //不讓laravel ORM自動去更新CREATED_AT欄位
    const UPDATED_AT = null;  //不讓laravel ORM自動去更新UPDATED_AT欄位
}
