<?php

namespace App\Shop\Entity;

use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    protected $table = 'merchandise';

    protected $primaryKey = 'id';

    // 可以大量指定異動的欄位（Mass Assignment）
    protected $fillable = [
        "id",
        "status",
        "name",
        "name_en",
        "introduction",
        "introduction_en",
        "photo",
        "price",
        "remain_count",
    ];
}
