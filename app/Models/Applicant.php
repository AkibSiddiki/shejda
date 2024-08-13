<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_post_id', 'id');
    }

}
