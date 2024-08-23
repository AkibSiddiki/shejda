<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    protected $guarded = [];

    const FACING = [
        1 => 'North',
        2 => 'South',
        3 => 'East',
        4 => 'West'
    ];

}
