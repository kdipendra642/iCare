<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Vacancy;

class Career extends Model
{
    protected $fillable = [
        'title',
        'description',
        'department',
        'level',
        'salary',
        'experience',
        'slug',
        'status',
    ];

    public function vacancy() {
        return $this->hasMany(Vacancy::class);
    }
}
