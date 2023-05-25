<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class identity extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'birthday',
        'job',
        'company',
    ];

    protected $casts = [
        'birthday' => 'datetime',
    ];
}
