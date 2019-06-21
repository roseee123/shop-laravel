<?php

namespace App\Shop\Entity;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $primaryKey = 'id';

    // 可以大量指定異動的欄位（Mass Assignment）
    protected $fillable = [
        "email",
        "password",
        "type",
        "nickname",
    ];
}
