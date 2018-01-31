<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'sex',
        'education_level',
        'dob',
        'phone',
        'email',
        'address',
        'time_to_reach_you',


    ];
}
