<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectBooking extends Model
{
    use HasFactory;

    protected $table = 'project_bookings';
    protected $guarded = [];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
