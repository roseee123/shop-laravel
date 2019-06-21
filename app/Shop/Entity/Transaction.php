<?php

namespace App\Shop\Entity;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';

    protected $primaryKey = 'id';

    // 可以大量指定異動的欄位（Mass Assignment）
    protected $fillable = [
        "id",
        "user_id",
        "merchandise_id",
        "price",
        "buy_count",
        "total_price",
    ];
}
