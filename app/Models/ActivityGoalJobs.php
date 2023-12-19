<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityGoalJobs extends Model
{
    use HasFactory;

    protected $table = 'activity_goal_jobs';

    protected $fillable = [
        'activity_goals_id',
        'job_description',
        'job_1',
        'int_1',
        'job_2',
        'int_2',
        'job_3',
        'int_3',
        'job_4',
        'int_4',
        'job_5',
        'int_5',
        'job_6',
        'int_6',
        'job_7',
        'int_7',
        'job_8',
        'int_8',
        'job_9',
        'int_9',
        'job_10',
        'int_10',
    ];
}
