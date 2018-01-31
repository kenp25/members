<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
    protected $fillable = [];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
