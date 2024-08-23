<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landowner extends Model
{
    use HasFactory;

    protected $guarded = [];

    const CATEGORY = [
        1 => 'Freehold',
        2 => 'Leasehold'
    ];

    const FACING = [
        1 => 'North',
        2 => 'South',
        3 => 'East',
        4 => 'West'
    ];

    const FEATURE = [
        1 => 'Lakeside',
        2 => 'Corner Plot',
        3 => 'Park View',
        4 => 'Main Road',
        5 => 'Others'
    ];
}
