<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Career;

class Vacancy extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'experience',
        'current_salary',
        'expected_salary',
        'project_reference',
        'source_reference',
        'reason',
        'resume',
        'status',
    ];

    public function career() {
        return $this->belongsTo(Career::class);
    }
}
