<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function bookings()
    {
        return $this->hasMany(ProjectBooking::class);
    }


    public function unseenBookingsCount()
    {
        return $this->bookings()->where('is_seen', 0)->count();
    }
}
