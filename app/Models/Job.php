<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_posts';
    protected $guarded = [];

    public function applicants()
    {
        return $this->hasMany(Applicant::class, 'job_post_id', 'id');
    }

    public function unseenApplicantsCount()
    {
        return $this->applicants()->where('is_seen', 0)->count();
    }
}
