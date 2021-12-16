<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    // 変更が頻繁に起こる table (トランザクションの頭文字で t_ )
    protected $table = 't_stocks';

    protected $fillable = [
        'product_id',
        'type',
        'quantity',
    ];
}
