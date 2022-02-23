<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FrequentlyAskedQue extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status',
    ];
}
