<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feat extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'category',
        'conditions',
        'type',
        'effects',
        'menuDisplay'
    ];

}
