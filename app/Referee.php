<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'member_id'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
