<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsUnit extends Model
{
     /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = true;
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'shop_id',
        'name',
        'status'
    ];
}
