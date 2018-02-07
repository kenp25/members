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

    public function getFullName()
    {
        return $this->firstname . " " . $this->lastname;
    }

    public function guardian()
    {
        return $this->hasOne(Guardian::class);
    }

    public function referee()
    {
        return $this->hasOne(Referee::class);
    }

    public function expertises()
    {
        return $this->hasMany(Expertise::class);
    }

    public function opKnowledge()
    {
        return $this->hasMany(OpKnowledge::class);
    }
}
