<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job;

class Skill extends Model
{
    protected $fillable = [
        'name',
        'abbrAbility',
        'description'
    ];

    public function job () {
        return $this -> belongsToMany( Job::class, "jobs_skills", "skill_id", "job_id" ); //model to join, name of the joining table, column name for current model, column name for joining model
    }
}
