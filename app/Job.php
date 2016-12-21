<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Skill;

class Job extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'type',
        'desc',
        'basePV',
        'baseForce',
        'featsFrequency',
        'skillsModifier',
        'powersModifier',
        'baseBBA',
        'baseToughness',
        'baseReflexes',
        'baseWill'
    ];

    public function skills () {
        return $this -> belongsToMany( Skill::class, "jobs_skills" ); //no need to redefine joinning table : available in Skill Model
    }
}
