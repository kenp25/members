<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'member_id',
        'address'
    ];
    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
