<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officials extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'contact',
        'chairmanship',
        'position',
        'termstart',
        'termend',
        'address',
        'status',
    ];
}
